<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Item;

class ItemsController extends Controller {

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * @Get("/item/add")
     */
    public function add()
    {
        return view('items.add');
        //form will go here.
    }

    /**
     * @Get("/item/{id}")
     */
    public function show($id)
    {
        $item = $this->item->find($id);
        //dd($item);

        return view('items.show', compact('item'));
    }

    /**
     * @Post("/item/submit")
     */
    public function submit()
    {
        return "it worked";
    }

    /**
     * @Get("/item/{id}/edit")
     */
    public function edit($id)
    {
       //as a seller, I want to edit my already-posted item so that I can lower the price
    }

}
