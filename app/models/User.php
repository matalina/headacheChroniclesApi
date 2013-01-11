<?php

use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface 
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Belongs to One Location
	 *
	 * @return relationship
	 */
	public function location()
	{
		return $this->belongsTo('Location');
	}

	/**
	 * Has Many Headaches
	 *
	 * @return relationship
	 */
	public function headache()
	{
		return $this->hasMany('Headache');
	}

	/**
	 * Create a New User from a form
	 *
	 * @param  array $user An array of user information
	 *
	 * @return boolean|object       returns true if user was created or an object of validation errors
	 */
	public function newUser($user)
	{
		$input = $user;
		$rules = array(
			'username' => 'required|alpha_num|max:25|unique:users',
			'password' => 'required|min:8|max:25|confirmed',
			'dob' => 'required|before:'.date('Y-m-d', strtotime('-13 years')),
			'gender' => 'required|in:M,F',
			'email' => 'required|email|unique:users',
			'location' => 'regex:/[a-zA-Z0-9 \-_]*/',
			'wug_api' => 'required_with:location|alpha_num'
		);

		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{
		    return $validation->messages();
		}

		$api = new Api();
		$key = $api->randomString(40);

		$loc_id = NULL;

		if(!empty($input['location'])) {
			$loc = new Location();
			$loc_id = $loc->insertGetId(array(
				'location' => $input['location'],
				'wug_api' => $input['wug_api'],
			));
		}

		$user = new User();
		$user->api_key = $key;
		$user->username = $input['username'];
		$user->password = Hash::make($input['password']);
		$user->dob = $input['dob'];
		$user->gender = $input['gender'];
		$user->location_id = $loc_id;
		$user->email = $input['email'];

		$user->save();

		return true;
	}
}