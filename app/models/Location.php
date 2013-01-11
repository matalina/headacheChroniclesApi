<?php

class Location extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';

	/**
	 * Has Many Weathers
	 *
	 * @return relationship
	 */
	public function weather()
	{
		return $this->hasMany('Weather');
	}

	/**
	 * Has Many Users
	 *
	 * @return relationship
	 */
	public function user()
	{
		return $this->hasMany('User');
	}
}