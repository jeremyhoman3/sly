<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title', 150);
            $table->longtext('description');
            $table->integer('price');
            $table->string('firstImageSlug', 60);
            $table->string('secondImageSlug', 60);
            $table->string('thirdImageSlug', 60);
            $table->boolean('hasBeenSold');
            $table->timestamps();
            $table->string('sellerEmail');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items');
	}

}
