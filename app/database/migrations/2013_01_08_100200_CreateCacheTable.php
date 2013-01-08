<?php

use Illuminate\Database\Migrations\Migration;

class CreateCacheTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laravel_cache', function($table)
		{
			$table->string('key');
			$table->text('value');
			$table->integer('expiration');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('laravel_cache');
	}

}
