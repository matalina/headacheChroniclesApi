<?php

class Weather extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'weathers';

	/**
	 * Belongs to One Location
	 *
	 * @return relationship
	 */
	public function location()
	{
		return $this->belongs_to('Location');
	}
}