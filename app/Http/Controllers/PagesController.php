<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PagesController extends Controller {

    public function contact()
    {
        return view('contact');
    }

    public function signin()
    {
        return view('sign-in');
    }

    public function faq()
    {
        return view('faq');
    }

}
