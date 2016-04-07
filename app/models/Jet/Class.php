<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Jet_Class extends Eloquent {

	use SoftDeletingTrait;
	public $timestamps = true;
	protected $table = 'jet_classes';
	protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'pivot'];

	public function jet_types()
	{
		return $this->hasMany('Jet_Type');
	}
}