<?php
use API\Transformers\OrderTransformer;
use API\Transformers\SuffixTransformer;

/**
 * Class OrderController
 */
class OrderController extends BaseController {

	/**
	 * @var OrderTransformer
	 */
	private $orderTransformer;

	/**
	 * @var SuffixTransformer
	 */
	private $suffixTransformer;

	/**
	 * @param OrderTransformer  $orderTransformer
	 * @param SuffixTransformer $suffixTransformer
	 */
	function __construct(OrderTransformer $orderTransformer, SuffixTransformer $suffixTransformer)
	{
		$this->orderTransformer  = $orderTransformer;
		$this->suffixTransformer = $suffixTransformer;
	}

	/**
	 * @param $status
	 *
	 * @return View
	 */
	public function getList($status)
	{
		$this->beforeFilter('auth');

		return View::make('content.order.list', [
			'remote' => I18n::localizeURL('api/order/list/'.$status).'?'.http_build_query(['html-paging' => 1]),
			'order_url' => I18n::localizeURL('order/show/'),
			'status' => $status
		]);
	}

	/**
	 * @param $order_id
	 *
	 * @return View
	 */
	public function getSend($order_id)
	{
		$order = Order::with(['legs', 'legs.airport_from', 'legs.airport_to', 'jet_makers', 'jet_classes'])
			->where('status_id', 1)
			->findOrFail(intval($order_id));

		return $this->showOrder($order);
	}

	/**
	 * @param $order_id
	 *
	 * @return View
	 */
	public function getShow($order_id)
	{
		if(Auth::check())
		{
			$user_id = Auth::user()->id;
			$user    = User::findOrFail($user_id);
			$order   = Order::with(['legs', 'legs.airport_from', 'legs.airport_to', 'jet_makers', 'jet_classes'])
				->where('user_id', $user->id)
				->findOrFail(intval($order_id));
		}
		else
		{
			$order = Order::with(['legs', 'legs.airport_from', 'legs.airport_to', 'jet_makers', 'jet_classes'])
				->whereNull('user_id')
				->findOrFail(intval($order_id));
		}

		return $this->showOrder($order);
	}

	/**
	 * @param Order $order
	 *
	 * @return \Illuminate\View\View
	 */
	private function showOrder($order)
	{
		$order_data = $this->orderTransformer->transformObject($order);

		return View::make('content.order.show',
			[
				'order'            => $order_data,
				'remote'           => I18n::localizeURL('api/catalog/tails').'?'.http_build_query(['order' => $order->id]),
				'send_order_url'   =>  I18n::localizeUrl('api/order/send-update/'.$order['id']),
				'delete_order_url' =>  I18n::localizeUrl('api/order/delete/'.$order['id']),
			]
		);
	}
}
