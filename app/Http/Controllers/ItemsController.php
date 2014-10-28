<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateItemRequest;
use App\Item;
use Illuminate\Routing\Controller;

class ItemsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Item::get();
        //dd($items);
        return view('items.index', compact('items'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('items.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateItemRequest $request
     * @return Response
     */
	public function store(CreateItemRequest $request)
	{
		//$input = $request->file('image1');
        //dd($input);

        $item = new Item;

        $item->title = $request->get('title');
        $item->description = $request->get('description');
        $item->price = $request->get('price');
        $item->firstImageSlug = $request->file('image1')->getClientOriginalName();
        $item->hasBeenSold = false;
        $item->sellerEmail = "example@gmail.com";
        $item->save();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = Item::whereId($id)->first();
        //dd($item);
        return view('items.show', compact('item'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $item = Item::whereId($id)->first();

        return view('items.edit', compact('item'));
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
