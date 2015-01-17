<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function($table)
		{
			$table->increments('id');
			$table->string('code');
			$table->string('name');
			$table->text('description');

			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}

}
