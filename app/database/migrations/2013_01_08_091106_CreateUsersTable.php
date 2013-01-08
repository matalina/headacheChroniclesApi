<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			// Application Generated Unique Identifiers
			$table->increments('id');
			$table->string('api_key', 40)->unique();

			// User Generated 
			$table->string('username', 25)->unique();
			$table->string('email',255)->unique();
			$table->string('password', 75);
			$table->date('dob');
			$table->string('gender', 1); //M or F
			$table->integer('location_id')->nullable()->default(NULL); // Users Location

			// Application Generated 
			$table->dateTime('last_login')->nullable()->default(NULL);
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
		Schema::drop('users');
	}

}