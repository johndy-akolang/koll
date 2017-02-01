<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ItemRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Condition;
use App\Models\Privatemessage;
use App\Models\Province;
use App\Models\User;
use App\Models\Item;
use App\Repositories\CategoryRepository;
use App\Repositories\CityRepository;
use App\Repositories\ConditionRepository;
use App\Repositories\ItemRepository;
use App\Repositories\ProvinceRepository;
use Auth;
use Mail;
use Redirect;
use Validator;
//use Illuminate\Pagination\Paginator;


class ItemController extends Controller
{

    /**
     * Class constructor
     * @param ItemRepository $item
     */
    public function __construct(
        CategoryRepository $category,
        CityRepository $city,
        ConditionRepository $condition,
        ItemRepository $item,
        ProvinceRepository $province
    )
    {
        $this->categoryRepo = $category;
        $this->cityRepo = $city;
        $this->conditionRepo = $condition;
        $this->itemRepo = $item;
        $this->provinceRepo = $province;
    }

    /**
     * Display a listing of the resource items or ads.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $items = $this->itemRepo->getActiveItems();

        return view('item.index')->with(compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        //if user can post i.e. user is seller or guest
        // if ($request->user()->can_post()) {
            $cities = $this->cityRepo->getAllCities();
            $provinces = $this->provinceRepo->getAllProvinces();
            $conditions = $this->conditionRepo->getAllConditions();
            $categories = $this->categoryRepo->getAllCategories();

            return view('item.create')
                ->with(compact('cities'))
                ->with(compact('provinces'))
                ->with(compact('conditions'))
                ->with(compact('categories'));

        // } else {
        //     return redirect('item.create')
        //         ->withErrors('You have not sufficient permissions for writing item');
        // }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ItemRequest $request)
    {
        //$user = User::where('email', $email)->first();

        // new item create
        $item = new \App\Models\Item();

        // upload images and stored filed
        $file = $request->file('images');
        $destination_path = 'images/uploads/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $file->move($destination_path, $filename);
        $item->images = $destination_path . $filename;
        //item = $this->images->upload($item);

        // details item or ads
        $item->title = $request->input('title');
        $item->price = $request->input('price');
        $item->condition = $request->input('condition');
        $item->category = $request->input('category');
        $item->description = $request->input('description');
        $item->province = $request->input('province');
        $item->city = $request->input('city');
        $item->mobile = $request->input('mobile');
        $item->slug = str_slug($item->title);
        $item->guest_id = $request->user()->id;

        if ($request->has('save'))
        {

            $item->active = 0;
            $message = 'Post Saved Succesfully';

        } else {

            $item->active = 1;
            $message = 'Your advertisement has been published successfully!';

        }

        // models
        $itemPostTitle = $item->title; // title item new post
        $itemPostSlug = $item->slug; //title item new post slug
        $loggedInUser = Auth::user(); // user logged in

        // email from, to and subject
        $to = $loggedInUser->email;
        $subject = $item->title;

        // email template variables
        $emailData = [
          'user' => sprintf('%s %s', $loggedInUser->first_name, $loggedInUser->last_name),
          'url' => sprintf('%s/%s', 'http://www.koll.com.ph/item', $itemPostSlug),
          'subject' => $itemPostTitle,
        ];

        // mailing notifications
        Mail::send('emails.item', $emailData, function($message) use ($to, $subject) {
            $message->to($to);
            $message->subject($subject);
        });

        $item->save();

        return redirect()
            ->route('user-items-create')
            ->withMessage($message);

    }


    /*
    * Display the specified resource.
    *
    * @param string $slug
    * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
    */
    public function show($slug)
    {
        // get item by slug
        $item = $this->itemRepo->getItemWithComments($slug, true);

        if ($item) {
          // paginate featured ads at right side
          $featured = \App\Models\Item::paginate(8);

          return view('item.show')
              ->with(compact('item'))
              ->with(compact('featured'));
        } else {
          return redirect('/')
              // TODO: Move the error message to 'lang'
              ->withErrors('requested page not found');
          // $comments = $items->comments; // this code won't execute
        }
    }


    /**
     * Show the form for editing the specified resource.
     * @param  Request $request
     * @param  string  $slug
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request, $slug)
    {
        // get item by slug
        $item = $this->itemRepo->getItem($slug);

        // check if the user is authorize to update the item
        // TODO: Use Policy https://laravel.com/docs/5.1/authorization#policies
        if (
            $item
            && $request->user()->id == $item['guest_id']
            || $request->user()->is_seller()
          ) {

            // select forms
            $cities = $this->cityRepo->getAllCities();
            $provinces = $this->provinceRepo->getAllProvinces();
            $conditions = $this->conditionRepo->getAllConditions();
            $categories = $this->categoryRepo->getAllCategories();

            return view('item.edit')
                ->with(compact('item'))
                ->with(compact('cities'))
                ->with(compact('provinces'))
                ->with(compact('conditions'))
                ->with(compact('categories'));
        }

        return redirect('/')
            // TODO: Access the response message via Lang
            ->withErrors('you have not sufficient permissions');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        // get item_id parameter
        $itemId = $request->input('item_id');
        $item = $this->itemRepo->getItem($itemId);
        $formData = $request->all();

        // check if the user is authorize to update the item
        // TODO: Use Policy https://laravel.com/docs/5.1/authorization#policies
        if (
            $item
            && $item['user']['id'] == $request->user()->id
            || $request->user()->is_seller()
          ) {
            $formData['slug'] = str_slug($request->input('title'));
            $duplicate = $this->itemRepo->getItem($formData['slug']);

            // check for duplicate title
            if (
                $duplicate
                && $duplicate['id'] != $itemId
              ) {
                return redirect('edit/' . $formData['slug'])
                    ->withErrors('Title already exists.')
                    ->withInput();
            }

            if ($request->has('save')) {
                $formData['active'] = 0;
                $message = 'Item saved successfully';
                $landing = 'edit/' . $formData['slug'];
            } else {
                $formData['active'] = 1;
                $message = 'Item updated successfully';
                $landing = 'item/' . $formData['slug'];
            }

            $this->itemRepo->updateItem($itemId, $formData);

            return redirect($landing)->withMessage($message);
        } else {
            return redirect('/')->withErrors('restricted');
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        /*
        $item = Item::find($id);

        if ($item && ($item->guest_id == $request->user()->id || $request->user()->is_seller())) {
            $item->delete();
            $data['message'] = 'Item deleted Successfully';
        } else {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }

        return redirect('/')->with($data);*/

    }

    /**
     * Show featured ads ramdomly by category.
     *
     */
    public function featured()
    {

        return view('item.show', compact('featured'));

    }


    /**
     * Search specific item
     *
     */
    public function getSearch(Request $request)
    {
        //Validation class maybe ? TODO
        if(!$request->has('q')) {
            return redirect('home')
                ->withErrors('You must make a search from the bar first');
        }

        //Let's escape first
        $parameters = e($request->get('q'));

        $parameters = explode(',', $parameters);
        //Values may be like "param1", "param2" after exploding, so we also need to trim them
        array_walk($parameters, 'trim');

        $items = Item::with('user')

        //Let's search the title first
        ->where(function($q) use ($parameters) {

            $j = 0;
            foreach ($parameters as $parameter) {

                if($j == 0) {
                    $q->where('title', 'LIKE', '%'.$parameter.'%');
                } else {
                    $q->orWhere('title', 'LIKE', '%'.$parameter.'%');
                }

                $j++;
            }
        })

        //Lastly, let's search in the user name
        ->orWhere(function($q) use ($parameters) {

            $q->whereHas('user', function($q2) use ($parameters) {

                $j = 0;
                foreach ($parameters as $parameter) {

                    if($j == 0) {
                        $q2->where('first_name', 'LIKE', '%'.$parameter.'%');
                    } else {
                        $q2->orwhere('first_name', 'LIKE', '%'.$parameter.'%');
                    }

                    $j++;
                }
            });
        })


        ->orderBy('id', 'desc')
        //$featured = Item::paginate(3);
        ->paginate(12);


        return view('home')
            ->withTitle('Search results for: '.implode(', ', $parameters))
            ->withItems($items);

    }

    /**
     * GUest send private message to seller. Non-user only.
     *
     */
    public function getMail(Request $request)
    {

        $input['name'] = $request->get('name');
        $input['email'] = $request->get('email');
        $input['message'] = $request->get('message');
        $slug = $request->input('slug');

        // models
        $newMessage = \App\Models\Privatemessage::create($input);
        $item = Item::where('slug', $slug)->first();
        $itemOwner = $item->guest;

        // email from, to and subject
        $to = $itemOwner->email;
        $subject = $item->title;

        // email templates
        $emailData = [
            'user' => sprintf('%s %s', $itemOwner->first_name, $itemOwner->last_name),
            'sndmsgtxt' => $newMessage->message,
            'url' => sprintf('%s/%s', 'http://www.koll.com.ph/item', $slug),
            'subject' => $item->title,
        ];

        // email template
        Mail::send('emails.emailitem', $emailData, function($message) use ($to, $subject) {
            $message->to($to);
            $message->subject($subject);
        });

        return redirect::back()->with('message', 'Thank you');

    }


}
