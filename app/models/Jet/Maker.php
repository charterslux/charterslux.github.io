<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Jet_Maker extends Eloquent {

	use SoftDeletingTrait;
	public $timestamps = true;
	protected $table = 'jet_makers';
	protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'pivot'];


	public function jet_class()
	{
		return $this->belongsTo('Jet_Class', 'class_id');
	}
}