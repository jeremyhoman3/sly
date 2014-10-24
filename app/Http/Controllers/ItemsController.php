<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Item;

class ItemsController extends Controller {

    /**
     * @Get("/add-item")
     */
    public function index()
    {
        $items = Item::get();

        dd($items);
    }

}
