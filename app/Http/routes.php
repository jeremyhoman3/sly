<?php

//Route::bind('items', function($id)
//{
//      return App\Item::whereId($id)->first();
//});

$router->get('/', function()
{
    return "home page goes here.";
});

$router->get('/contact', ['as' => 'contact', 'uses' => '\App\Http\Controllers\PagesController@contact']);

$router->resource('items', '\App\Http\Controllers\ItemsController');