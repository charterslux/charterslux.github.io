<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Airport_Contact extends Eloquent {

	use SoftDeletingTrait;
	public $timestamps = true;
	protected $dates = ['created_at', 'updated_at', 'deleted_at'];
	protected $table = 'airport_contacts';
	protected $fillable = array('*');

	public function airport()
	{
		return $this->belongsTo('Airport');
	}
}