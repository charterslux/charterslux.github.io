<?php namespace API\Transformers;


class SuffixTransformer extends Transformer{

	/**
	 * @param $item
	 *
	 * @return mixed
	 */
	public function transform($suffix)
	{
		$translate = trans('suffixes.'.array_get($suffix, 'alias'));

		$suffix_array = NULL;
		if($translate)
			return [
				'id' => array_get($suffix, 'id'),
				'name' => trans('suffixes.'.array_get($suffix, 'alias')),
			];
	}

	public function transformObject($suffix)
	{
		return $this->transform($suffix->toArray());
	}
}