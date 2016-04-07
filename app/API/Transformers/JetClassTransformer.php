<?php namespace API\Transformers;
/**
 * Class JetClassTransformer
 * @package API\Transformers
 */
class JetClassTransformer extends Transformer {

	/**
	 * @param $jet_class
	 *
	 * @return array
	 */
	public function transform($jet_class)
	{
		if(array_key_exists('jet_class', $jet_class))
		{
			return $this->transform($jet_class['jet_class']);
		}

		return [
			'id'   => $jet_class['id'],
			'name' => static::translateClassName($jet_class['name']),
		];
	}

	public function transformObject($jet_class)
	{
		return [
			'id' => $jet_class->id,
			'name' => static::translateClassName($jet_class->name),
		];
	}

	public static function translateClassName($name)
	{
		return trans('messages.jet.class.'.strtolower($name));
	}
}