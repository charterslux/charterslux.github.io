<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Country extends Eloquent {

	use SoftDeletingTrait;
	public $timestamps = true;
	protected $table = 'countries';

	public function cities()
	{
		return $this->hasMany('City');
	}

	public function airports()
	{
		return $this->hasManyThrough('Airport', 'City');
	}
}