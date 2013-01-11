<?php

class WeatherController extends BaseController {

		/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($api_key, $start_date = NULL, $end_date = NULL)
	{
		$api = new Api();
		$user = $api->getUser($api_key);

		if($user !== NULL) {
			// Processing Code Here
		}
		else if($user === false) {
			return Response::json(array(
				'code' => '401',
				'data' => 'Incorrect API key sent.'
			));
		}
		else {
			return Response::json(array(
				'code' => '401',
				'data' => 'A User does not exist with that API key'
			));
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($api_key)
	{
		$api = new Api();
		$user = $api->getUser($api_key);

		if($user !== NULL) {
			// Processing Code Here
		}
		else if($user === false) {
			return Response::json(array(
				'code' => '401',
				'data' => 'Incorrect API key sent.'
			));
		}
		else {
			return Response::json(array(
				'code' => '401',
				'data' => 'A User does not exist with that API key'
			));
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show($api_key, $id)
	{
		$api = new Api();
		$user = $api->getUser($api_key);

		if($user !== NULL) {
			// Processing Code Here
		}
		else if($user === false) {
			return Response::json(array(
				'code' => '401',
				'data' => 'Incorrect API key sent.'
			));
		}
		else {
			return Response::json(array(
				'code' => '401',
				'data' => 'A User does not exist with that API key'
			));
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update($api_key, $id)
	{
		$api = new Api();
		$user = $api->getUser($api_key);

		if($user !== NULL) {
			// Processing Code Here
		}
		else if($user === false) {
			return Response::json(array(
				'code' => '401',
				'data' => 'Incorrect API key sent.'
			));
		}
		else {
			return Response::json(array(
				'code' => '401',
				'data' => 'A User does not exist with that API key'
			));
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy($api_key, $id)
	{
		$api = new Api();
		$user = $api->getUser($api_key);

		if($user !== NULL) {
			// Processing Code Here
		}
		else if($user === false) {
			return Response::json(array(
				'code' => '401',
				'data' => 'Incorrect API key sent.'
			));
		}
		else {
			return Response::json(array(
				'code' => '401',
				'data' => 'A User does not exist with that API key'
			));
		}
	}

}