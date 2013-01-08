<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// Headache API Calls
Route::get('headaches', 'HeadacheController@index'); // Get all Headaches
Route::post('headache', 'HeadacheController@store'); // New Headache
Route::get('headache', 'HeadacheController@show'); // Get a Headache
Route::put('headache', 'HeadacheController@update'); // Update a Headache
Route::delete('headache', 'HeadacheController@destroy'); // Delete a Headache

// Weather API Calls
Route::get('weathers', 'WeatherController@index'); // Get all Weathers
Route::post('weather', 'WeatherController@store'); // New Weather
Route::get('weather', 'WeatherController@show'); // Get a Weather
Route::put('weather', 'WeatherController@update'); // Update a Weather
Route::delete('weather', 'WeatherController@destroy'); // Delete a Weather

//Sync API Calls
Route::get('compare/user','SyncController@compareUser'); // Compare Users online/offline
Route::get('compare/headaches', 'SyncController@compareHeadaches'); // Compare Headaches online/offline
Route::post('sync/user', 'SyncController@syncUser'); // Sync User online/offline
Route::post('sync/headaches', 'SyncController@syncHeadaches'); // Sync Headaches online/offline
Route::post('sync/weather', 'SyncController@syncWeather'); // Sync Weather offline