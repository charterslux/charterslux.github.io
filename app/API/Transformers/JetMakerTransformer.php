<?php namespace API\Transformers;

/**
 * Class JetMakerTransformer
 * @package API\Transformers
 */
class JetMakerTransformer extends Transformer {

	/**
	 * @param $jet_type
	 *
	 * @return array
	 */
	public function transform($jet_type)
	{
		if(array_key_exists('jet_maker', $jet_type))
		{
			return $this->transform($jet_type['jet_maker']);
		}

		return [
			'id'   => $jet_type['id'],
			'name' => $jet_type['name'],
		];
	}


	public function transformObject($jet_maker)
	{
		return [
			'id' => $jet_maker->id,
			'name' => $jet_maker->name,
		];
	}
}