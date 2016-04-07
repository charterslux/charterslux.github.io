<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class City extends Eloquent {

	use SoftDeletingTrait;
	public $timestamps = true;
	protected $table = 'cities';

	public function country()
	{
		return $this->belongsTo('Country');
	}
	public function airports()
	{
		return $this->hasMany('Airport');
	}
}