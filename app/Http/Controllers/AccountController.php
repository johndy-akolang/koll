<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Item;
use Auth;
use View;
use Validator;
use Input;
use Redirect;

class AccountController extends Controller
{
    function __construct(User $user) {
        $this->user = $user;
    }



    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    public function user()
    {
        return view('account.user');
    }

    /**
     * Display active item of particular user.
     *
     * @param int $id
     * @return view
     */
    public function user_posts($id)
    {
        //
        $item = Item::where('author_id', $id)->where('active', 1)->orderBy('created_at', 'desc')->paginate(10);
        $title = User::find($id)->first_name;
        return view('home')->withItem($item)->withTitle($title);
    }

    /**
     * Display all of the active item of particular user.
     *
     * @param Request $request
     * @return view
     */
    public function user_posts_all(Request $request)
    {
        //
        $user = $request->user();
        $item = Item::where('author_id', $id)->where('active', 1)->orderBy('created_at', 'desc')->paginate(10);
        $title = $user->first_name;
        return view('home')->withItem($item)->withTitle($title);
    }

    /**
     * profile for user.
     *
     */
    public  function profile(Request $request, $id)
    {
        $data['user'] = User::find($id);
        if (!$data['user'])
            return redirect('/');

        if ($request -> user() && $data['user'] -> id == $request -> user() -> id) {
            $data['guest'] = true;
        } else {
            $data['guest'] = null;
        }
       /* $data['comments_count'] = $data['user'] -> comments -> count();
        $data['posts_count'] = $data['user'] -> item -> count();
        $data['posts_active_count'] = $data['user'] -> item -> where('active', '1') -> count();
        $data['latest_posts'] = $data['user'] -> item -> where('active', '1') -> take(5);
        $data['latest_comments'] = $data['user'] -> comments -> take(5);*/
        return view('account.user', $data);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        if (Auth::user()->id != $id) {
            return Redirect::route('account.edit',['id' => Auth::user()->id]);
        } else {
            $user = $this->user->find($id);
            return View::make('account.edit', ['user' => $user]);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $rules = array(
            'useraddress' => 'min:20',
            //'profilepic'    =>  'mimes:jpeg,jpg,png|max:1000',
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->passes()) {
            $user = $this->user->find($id);
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->email = Input::get('email');
            $user->mobile = Input::get('mobile');
            $user->useraddress = Input::get('useraddress');
            $user->companyname = Input::get('companyname');
            $user->companyaddress = Input::get('companyaddress');
            $user->companynumber = Input::get('companynumber');

            $file = $request->file('profilepic');
            // dd($file);
            $destination_path = 'images/avatar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $file->move($destination_path, $filename);
            // $item->images = $destination_path . $filename;
            $user->profilepic = $destination_path . $filename;
            $user->save();

            return Redirect::route('account.edit', ['id' => $id])
                                    ->with('message', 'Save Changes');

        } else {
            return Redirect::back()->withInput()
                                   ->withErrors($validator);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
