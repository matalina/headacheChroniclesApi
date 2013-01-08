<?php

use Illuminate\Database\Migrations\Migration;

class CreateHeadacheTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('headaches', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->text('json'); // Headache Information in JSON format
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
		Schema::drop('headaches');
	}

}