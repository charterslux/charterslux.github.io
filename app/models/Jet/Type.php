<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Jet_Type extends Eloquent {

	use SoftDeletingTrait;
	public $timestamps = true;
	protected $table = 'jet_types';
	protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'pivot'];

	public function jet_class()
	{
		return $this->belongsTo('Jet_Class', 'class_id');
	}
	public function jet_maker()
	{
		return $this->belongsTo('Jet_Maker', 'maker_id');
	}
}