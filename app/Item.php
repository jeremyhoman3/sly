<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Item extends Eloquent {

    /**
     * Fillable fields for an item.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'price',
    ];
}