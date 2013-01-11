<?php

class HeadacheController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($api_key, $start_date = NULL, $end_date = NULL)
	{
		$api = new Api();
		$user = $api->getUser($api_key);
		$valid_dates = $api->validDates(array($start_date, $end_date));
		
		if($user !== NULL && $valid_dates && $user !== false) {
			// if start and end dates are set
			if($start_date !== NULL && $end_date !== NULL) {
				$headaches = Headache::where('id', '=', $user->id)
					->where('created_at', '>=', $start_date)
					->where('created_at', '<=', $end_date)
					->get();
			}
			// if only a start date is set
			else if($start_date !== NULL && $end_date === NULL) {
				$headaches = Headache::where('id', '=', $user->id)
					->where('created_at', '>=', $start_date)
					->get();
			}
			// if only an end date is set
			else if($start_date === NULL && $end_date !== NULL) {
				$headaches = Headache::where('id', '=', $user->id)
					->where('created_at', '<=', $end_date)
					->get();
			}
			// otherwise get all headaches
			else {
				$headaches = Headache::where('id', '=', $user->id)
					->get();
			}

			return Response::json(array(
				'code' => '200',
				'data' => $headaches
			));
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
				'data' => 'A User does not exist with that API key.'
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