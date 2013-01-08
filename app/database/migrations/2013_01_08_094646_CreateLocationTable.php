<?php

use Illuminate\Database\Migrations\Migration;

class CreateLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function($table)
		{
			$table->increments('id');
			$table->string('location');
			$table->string('wug_api',20); // Weather Underground API Key
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}