<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemTableSeeder extends Seeder {

    public function run()
    {

        Item::create([
            'title'           => 'Brown couch, like-new condition',
            'description'     => 'I bought this 3 months ago, but it does not match my curtains. Must be able to pick it up',
            'price'           => 85,
            'firstImageSlug'  => 'brown-couch',
            'secondImageSlug' => 'brown-couch-angle-2',
            'thirdImageSlug'  => 'brown-couch-left',
            'sellerEmail'     => 'simpson@gmail.com',
            'hasBeenSold'     => false
        ]);
    }
}