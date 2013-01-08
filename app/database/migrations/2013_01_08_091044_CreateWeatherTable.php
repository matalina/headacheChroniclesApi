<?php

use Illuminate\Database\Migrations\Migration;

class CreateWeatherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('weathers', function($table)
		{
			$table->increments('id');
			$table->string('location', 100); // Quick View Location
			$table->text('json');
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
		Schema::drop('weathers');
	}

}