<?php namespace API\Transformers;

/**
 * Class OrderTransformer
 * @package API\Transformers
 */
class OrderTransformer extends Transformer{

	/**
	 * @var LegTransformer
	 */
	private $legTransformer;

	/**
	 * @var JetClassTransformer
	 */
	private $jetClassTransformer;

	/**
	 * @var JetMakerTransformer
	 */
	private $jetMakerTransformer;

	/**
	 * @param LegTransformer      $legTransformer
	 * @param JetClassTransformer $jetClassTransformer
	 * @param JetMakerTransformer $jetMakerTransformer
	 */
	function __construct(LegTransformer $legTransformer, JetClassTransformer $jetClassTransformer, JetMakerTransformer $jetMakerTransformer)
	{
		$this->legTransformer      = $legTransformer;
		$this->jetClassTransformer = $jetClassTransformer;
		$this->jetMakerTransformer = $jetMakerTransformer;
	}

	/**
	 * @param $item
	 *
	 * @return mixed
	 */
	public function transform($order)
	{
		$order_status_name = array_get($order['status'], 'name');
		$order_status = trans('messages.order_status.'.$order_status_name);
		$legs = array_get($order, 'legs', []);

		if( $legs AND ! is_array($legs))
			$legs = $legs->toArray();

		return [
			'id'         => array_get($order, 'id'),
			'legs'       => $this->legTransformer->transformCollection($legs),
			'status'     => $order_status,
//			'created_at' => $order->created_at->format('Y-m-d H:i:s'),
//			'updated_at' => $order->updated_at->format('Y-m-d H:i:s'),
		];
	}

	public function transformObject($order)
	{
		$order_status_name = $order->status->name;
		$order_status      = trans('messages.order_status.'.$order_status_name);
		$legs              = $order->legs;
		$classes           = $order->jet_classes;
		$makers            = $order->jet_makers;

		return [
			'id'           => array_get($order, 'id'),
			'legs'         => $this->legTransformer->transformCollection($legs),
			'classes'      => $this->jetClassTransformer->transformCollection($classes),
			'makers'       => $this->jetMakerTransformer->transformCollection($makers),
			'tails'        => $order->tails,
			'status_id'    => $order->status_id,
			'status_class' => $order->status->class,
			'status'       => $order_status,
		];
	}
}