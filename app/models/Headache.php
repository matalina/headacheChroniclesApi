<?php

class Headache extends Eloquent 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'headaches';

	/**
	 * Belongs to One User
	 *
	 * @return relationship
	 */
	public function user() 
	{
		return $this->belongs_to('User');
	}
}