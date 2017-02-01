<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\ItemRepository;
use Validator;

class HomeController extends Controller
{

    /**
     * Class constructor
     * @param ItemRepository $item
     */
    public function __construct(ItemRepository $item)
    {
        $this->itemRepo = $item;
    }

    /**
     * Display a listing of the paginated resource.
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // TODO: Can we delete these?
        /*$items = Item::paginate(10);
        return view('home')->with('items', $items);*/

        //new controller
        /*$items = Item::where('slug',$slug)->first();*/
        /*$datas = User::all();*/

        // show item by date latest.
        $items =  $this->itemRepo->getActiveItems(12);
        return view('home')->withItems($items);

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
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
