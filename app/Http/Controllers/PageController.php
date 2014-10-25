<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller {

    /**
     * @Get("/contact")
     */
    public function index()
    {
        return view('contact');
    }

}
