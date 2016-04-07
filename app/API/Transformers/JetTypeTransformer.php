<?php namespace API\Transformers;

class JetTypeTransformer extends Transformer {

	/**
	 * @param $item
	 *
	 * @return mixed
	 */
	public function transform($item)
	{
		$images_path = app_path().DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'jet_types'.DIRECTORY_SEPARATOR;
		$images_path = $images_path.$item['id'].DIRECTORY_SEPARATOR;
		if(file_exists($images_path))
		{
			foreach(scandir($images_path) as $file)
			{
				if( $file != '.'
					AND $file != '..'
					AND $file != 'Thumbs.db'
					AND $file != 'small_icon.jpg'
					AND $file != 'thumbs'
					AND $file != '.DS_Store'
					AND $file != '._.DS_Store'
				)
				{
					$photo = pathinfo($images_path.$file);
					$photos[] = $this->_check_thumb($photo, $item['id']);
				}
			}
		}

		return [
			'id' => array_get($item, 'id'),
			'class_id' => array_get($item, 'class_id'),
			'maker_id' => array_get($item, 'maker_id'),
			'class_name' => JetClassTransformer::translateClassName(array_get($item['jet_class'], 'name')),
			'maker_name' => array_get($item['jet_maker'], 'name'),
			'name' => array_get($item, 'name'),
			'description' => array_get($item, 'description_ru'),
			'flight_range' => array_get($item, 'flight_range'),
			'max_flight_height' => array_get($item, 'max_flight_height'),
			'max_speed' => array_get($item, 'max_speed'),
			'min_pax' => array_get($item, 'min_pax'),
			'max_pax' => array_get($item, 'max_pax'),
			'length' => array_get($item, 'length'),
			'width' => array_get($item, 'width'),
			'height' => array_get($item, 'height'),
			'luggage_bay_volume' => array_get($item, 'luggage_bay_volume'),
			'production_from' => array_get($item, 'production_from'),
			'production_to' => array_get($item, 'production_to'),
		];
	}

	/**
	 * @param $photo
	 * @param $jet_type
	 *
	 * @return array
	 */
	protected function _check_thumb($photo, $jet_type)
	{
		$thumb_path     = $photo['dirname'].DIRECTORY_SEPARATOR.'thumbs'.DIRECTORY_SEPARATOR;
		$photo_path_rel = 'media/jet_types/'.$jet_type.'/';
		$thumb_path_rel = $photo_path_rel.'thumbs/';

		$photo_arr = array(
			'big'   => $photo_path_rel.$photo['basename'],
			'thumb' => $thumb_path_rel.$photo['basename'],
		);

		if(file_exists($thumb_path.$photo['basename']) AND $photo['filename'] != 'small_icon')
		{
			return $photo_arr;
		}

		if( ! file_exists($thumb_path))
			mkdir($thumb_path, 0775);

		$image = Image::make($photo['dirname'].DIRECTORY_SEPARATOR.$photo['basename']);
		$image->resize(NULL, 160)->save($thumb_path.$photo['basename'], 85);

		return $photo_arr;
	}
}