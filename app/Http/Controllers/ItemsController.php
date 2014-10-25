<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Item;

class ItemsController extends Controller {

    /**
     * @Get("/add")
     */
    public function index()
    {
        $item = Item::find(1);

        return $item;
        //how to pass this information into the view
    }

}
