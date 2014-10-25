<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Item;

class ItemsController extends Controller {

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * View all items
     *
     * @Get("/item/index")
     */
    public function index()
    {
        $items = $this->item->all();
        //dd($items);
        return view('items.index', compact('items'));
    }

    /**
     * Show details about item, given certain id.
     *
     * @Get("/item/id/{id}")
     */
    public function show($id)
    {
        $item = $this->item->find($id);

        //dd($item);

        return view('items.show', compact('item'));
    }

    /**
     * Show a form for user to submit a new item.
     *
     * @Get("/item/submit")
     */
    public function submit()
    {
        return view('items.submit');
    }

    /**
     * Store item in database.
     *
     * @Post("/item/store")
     */
    public function store(Request $request, Item $item)
    {
        //figure out how to do this - requires instance of uploadedfile

        //$imageSlug = $this->item->firstImageSlug->getClientOriginalName();
        //return $imageSlug;

        //$item->create($request->all());
        //return redirect()->route('item.index');
    }

    /**
     * Edit existing item
     *
     * @Get("/item/{id}/edit")
     */
    public function edit($id)
    {
        //as a seller, I want to edit my already-posted item so that I can lower the price
    }

}
