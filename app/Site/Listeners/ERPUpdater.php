<?php namespace Site\Listeners;

use API\Exception\InternalErrorException;
use Laracasts\Commander\Events\EventListener;
use Queue;
use Site\Client\Events\ClientUpdated;
use Site\Order\Events\OrderChangeStatusToSend;
use Site\User\Events\UserRegistered;
use User;

/**
 * Class ERPUpdater
 * @package Site\Listeners
 */
class ERPUpdater extends EventListener {

	/**
	 * @param UserRegistered $event
	 */
	public function whenUserRegistered(UserRegistered $event)
	{
		$this->update_client_erp_id($event->client->id);
	}

	/**
	 * @param OrderChangeStatusToSend $event
	 *
	 * @throws InternalErrorException
	 */
	public function whenOrderChangeStatusToSend(OrderChangeStatusToSend $event)
	{
		Queue::push('\Site\Queues\ERPSync@push_order', ['order_id' => $event->order->id]);
	}

	/**
	 * @param ClientUpdated $event
	 */
	public function whenClientUpdated(ClientUpdated $event)
	{
		$this->update_client_erp_id($event->client->id);
	}

	/**
	 * @param $client_id
	 */
	private function update_client_erp_id($client_id)
	{
		Queue::push('\Site\Queues\ERPSync@update_client', ['client_id' => $client_id]);
	}
}