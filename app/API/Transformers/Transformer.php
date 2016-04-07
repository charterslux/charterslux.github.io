<?php namespace API\Transformers;
/**
 * Class Transformer
 * @package API\Transformers
 */
abstract class Transformer {

	/**
	 * @param $items
	 *
	 * @return array
	 */
	public function transformCollection($items)
	{
		if(is_object($items))
		{
			$transformed_data = NULL;
			foreach($items as $item)
			{
				$transformed_item = $this->transformObject($item);

				if($transformed_item)
					$transformed_data[] = $transformed_item;
			}

			return $transformed_data;
		}

		return array_map([$this, 'transform'], $items);
	}

	/**
	 * @param $item
	 *
	 * @return mixed
	 */
	public abstract function transform($item);
}