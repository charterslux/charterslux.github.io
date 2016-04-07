<?php namespace Site\Queues;

use Client;
use Illuminate\Queue\Jobs\Job;
use Order;
use XMLRPC_Proxy;

class ERPSync {

	/**
	 * Отправка заявки в ERP
	 *
	 * @param Job   $job
	 * @param array $data
	 */
	public function push_order($job, $data)
	{
		$order_id = array_get($data, 'order_id');
		$order = Order::with('user', 'client', 'legs', 'legs.airport_from', 'legs.airport_to', 'jet_makers', 'jet_classes')->find($order_id);

		$legs    =
		$tails   =
		$makers  =
		$classes = [];
		$order_legs        = $order->legs;
		$order_tails       = ($order->tails) ?: [];
		$order_jet_makers  = $order->jet_makers;
		$order_jet_classes = $order->jet_classes;

		foreach($order_legs as $leg)
		{
			$legs[$leg->id] = [
				'from' => $leg->airport_from->icao_code,
				'to'   => $leg->airport_to->icao_code,
				'date' => $leg->departure_time->format('c'),
				'pax'  => $leg->passengers,
			];
		}


		if($order_tails)
			foreach($order_tails as $tail => $params)
			{
				$tails[$tail] = [
					'tail'  => $tail,
					'price' => intval(preg_replace('[\D]', '', $params['fly_price'])),
				];
			}

		foreach($order_jet_makers as $maker)
		{
			$makers[$maker->id] = [
				'jet_maker' => $maker->name,
			];
		}

		foreach($order_jet_classes as $class)
		{
			$classes[] = [
				'jet_class' => $class->name_ru,
			];
		}

		$client_fio   = $order->client->fio();
		$client_phone = $order->client->phone;

		$rpc_order = array(
			'legs'      => array_values($legs),
			'aircrafts' => array_values($tails),
			'client'    => [
				'name'  => ($client_fio) ?: '',
				'phone' => ($client_phone) ?: '',
				'email' => $order->user->email,
			],
		);

		$rpc = new XMLRPC_Proxy();
		$result = $rpc('create_request', $rpc_order);
		$order_id = array_get(array_get($result, 'request', []), 'id');
		$order->erp_id = $order_id;
		$order->save();

		$job->delete();
	}

	/**
	 * @param Job   $job
	 * @param array $data
	 */
	public function update_client($job, $data)
	{
		$client_id = array_get($data, 'client_id');
		$client    = Client::with('user', 'suffix')->find($client_id);
		$user      = $client->user;

		$rpc = new XMLRPC_Proxy();

		$lead = $rpc('create_client', $this->client_data($user, $client));

		if( ! is_array($lead) AND $lead)
		{
			$erp_id = $lead;
		}
		else
		{
			$erp_id = array_get($lead, 'id', NULL);
		}

		if($erp_id)
		{
			$user->erp_id = $erp_id;
			$user->save();
		}

		$job->delete();
	}

	/**
	 * @param User   $user
	 * @param Client $client
	 *
	 * @return array
	 */
	private function client_data($user, $client)
	{
		return [
			'id'        => "$user->erp_id",
			'email'     => $user->email,
			'name'      => $client->name('ifo'),
			'title'     => ($client->suffix_id) ? trans('suffixes.'.$client->suffix->alias) : null,
			'mobile'    => $client->phone_number,
			'lang'      => $client->preferred_language,
			'birthdate' => "$client->borned_at()"
		];
	}
}