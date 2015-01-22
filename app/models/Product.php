<?php

class Product extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	public function categories()
	{
		return $this->belongsToMany('Category');
	}

	public function price()
	{
		return $this->hasOne('Price');
	}
}
