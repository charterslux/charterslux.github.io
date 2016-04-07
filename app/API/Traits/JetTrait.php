<?php namespace API\Traits;

use Image;

trait JetTrait {

	public function getJetPictures($jetId, $jetTailNumber)
	{
		$_images  = [];
		for($i=1;$i<3;$i++)
		{
			$number = ($i == 1) ? NULL : '_'.$i;
			$image = array(
				'href' => 'media'.DIRECTORY_SEPARATOR
					.'jets'.DIRECTORY_SEPARATOR
					.$jetId.DIRECTORY_SEPARATOR,
				'image' => $jetId.'_'.strtolower($jetTailNumber).$number,
				'ext' => 'jpg',
			);

			// @todo обработка картинок
			if($this->check_image($image))
			{
				$_images[$i] = array(
					'big'  => asset('/'.$image['href'].$image['image'].'.'.$image['ext']),
					'thmb' => asset('/'.$image['href'].$image['image'].'_thmb.'.$image['ext']),
				);
			}
		}

		return array_values($_images);
	}

	private function check_image($image)
	{
		$show_image = FALSE;

		$image_path = public_path().DIRECTORY_SEPARATOR.$image['href'].$image['image'].'.'.$image['ext'];

		if(file_exists($image_path))
		{
			$image_thumb_path = public_path().DIRECTORY_SEPARATOR.$image['href'].$image['image'].'_thmb.'.$image['ext'];
			if( ! file_exists($image_thumb_path))
			{
				if(filesize($image_path) > 0)
				{
					Image::make($image_path)->resize(null, 145, function ($constraint) {
						$constraint->aspectRatio();
						$constraint->upsize();
					})->save($image_thumb_path, 90);
				}
				else
				{
					unlink($image_path);
				}
			}

			$show_image = TRUE;
		}

		return $show_image;
	}
}