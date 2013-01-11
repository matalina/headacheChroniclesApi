<?php
class Api 
{	
	/**
	 * Get User by API key
	 *
	 * @param  string $api_key A string representing an api key
	 *
	 * @return boolean|object returns false if invalid code supplied or an object of the user with the api key
	 */
	public function getUser($api_key) 
	{
		$input = array('api_key' => $api_key);
		$rules = array('api_key' => 'required|alpha_num|max:20');

		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{
		    return false;
		}

		$user = User::where('api_key','=',$api_key)->first();
		return $user;
	}

	public function validDates($dates) 
	{
		// assume the dates are invalid
		$check = false;
		// if not an array of dates make it one
		if(!is_array($dates)) {
			$dates = array($dates);
		}

		foreach($dates as $date) {
			if($date === NULL) {
				$check = true;
			}
			else if(preg_match('/[0-9]{4}\-[0-9]{2]\-[0-9]{2}/',$date)) {
				$check = true;
			}
			else {
				$check = false;
			}
		}

		return $check;
	}

	public function randomString($count)
	{
		return substr(sha1(uniqid('', true)), 0, $count);
	}

}