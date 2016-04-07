<?php namespace API\Traits;

use File;
use Image;

trait JetTypeTrait {

	/**
	 * @param $id
	 *
	 * @return string
	 */
	public function getJetTypePicture($id)
	{
		$jet_types_rel_path = '/media/jet_types/';
		$jet_types_abs_path = public_path().DIRECTORY_SEPARATOR.$jet_types_rel_path;
		$full_image_name = $id.'/exterior.';
		$full_image_extensions = ['jpg', 'jpeg'];
		$small_icon = $id.'/small_icon.jpg';

		if( ! File::exists($jet_types_abs_path.$small_icon))
		{
			$full_image = NULL;
			foreach($full_image_extensions as $ext)
			{
				$full_image_path = $jet_types_abs_path.$full_image_name.$ext;

				if(File::exists($full_image_path))
					$full_image = $full_image_path;
			}

			if($full_image)
				Image::make($full_image)->resize(null, 100, function ($constraint) {
					$constraint->aspectRatio();
					$constraint->upsize();
				})->save($jet_types_abs_path.$small_icon, 70);
		}

		return $jet_types_rel_path.$small_icon;
	}
}