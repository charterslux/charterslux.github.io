<?php namespace API\Transformers;


class PageTransformer extends Transformer {

	/**
	 * @param $item
	 *
	 * @return mixed
	 */
	public function transform($page)
	{
		return [
//			'id' => array_get($page, 'id'),
//			'lang' => array_get($page, 'lang'),
//			'alias' => array_get($page, 'info'),
			'title' => array_get($page, 'title'),
			'text' => array_get($page, 'text'),
		];
	}
}