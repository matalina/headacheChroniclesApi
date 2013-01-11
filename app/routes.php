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
Route::get('headaches/{api_key}/{start_date?}/{end_date?}', 'HeadacheController@index'); // Get all Headaches
Route::post('headache/{api_key}', 'HeadacheController@store'); // New Headache
Route::get('headache/{api_key}/{id}', 'HeadacheController@show'); // Get a Headache
Route::put('headache/{api_key}/{id}', 'HeadacheController@update'); // Update a Headache
Route::delete('headache/{api_key}/{id}', 'HeadacheController@destroy'); // Delete a Headache

// Weather API Calls
Route::get('weathers/{api_key}/{start_date?}/{end_date?}', 'WeatherController@index'); // Get all Weathers
Route::post('weather{api_key}', 'WeatherController@store'); // New Weather
Route::get('weather{api_key}/{id}', 'WeatherController@show'); // Get a Weather
Route::put('weather{api_key}/{id}', 'WeatherController@update'); // Update a Weather
Route::delete('weather{api_key}/{id}', 'WeatherController@destroy'); // Delete a Weather

//Sync API Calls
Route::get('compare/user/{api_key}/{digest}','SyncController@compareUser'); // Compare Users online/offline
Route::get('compare/headaches/{api_key}/{digest}', 'SyncController@compareHeadaches'); // Compare Headaches online/offline
Route::post('sync/user/{api_key}', 'SyncController@syncUser'); // Sync User online/offline
Route::post('sync/headaches/{api_key}', 'SyncController@syncHeadaches'); // Sync Headaches online/offline
Route::post('sync/weather/{api_key}', 'SyncController@syncWeather'); // Sync Weather offline

// Auth Calls
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::resource('auth', 'AuthController');