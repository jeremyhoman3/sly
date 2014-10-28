<?php

$router->get('/', '\App\Http\Controllers\ItemsController@index');

$router->get('/sign-in', '\App\Http\Controllers\PagesController@signin');
$router->get('/faq', '\App\Http\Controllers\PagesController@faq');

$router->get('/contact', ['as' => 'contact', 'uses' => '\App\Http\Controllers\PagesController@contact']);

$router->resource('items', '\App\Http\Controllers\ItemsController');