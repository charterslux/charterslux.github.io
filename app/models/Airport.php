<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Airport extends Eloquent {

	use SoftDeletingTrait;
	public $timestamps = true;
	protected $table = 'airports';

	public function city()
	{
		return $this->belongsTo('City');
	}
}