<?php

class SyncController extends BaseController
{
	public function compareUser($api_key, $digest) 
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

	public function compareHeadaches($api_key, $digest) 
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

	public function syncUser($api_key) {
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

	public function syncHeadaches($api_key) 
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

	public function syncWeather($api_key) {
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