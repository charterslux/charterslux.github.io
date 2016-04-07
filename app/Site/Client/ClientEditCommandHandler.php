<?php namespace Site\Client;

use Auth;
use Client;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class ClientEditCommandHandler implements CommandHandler {

	use DispatchableTrait;

	/**
	 * Handle the command
	 *
	 * @param ClientEditCommand $command
	 *
	 * @return mixed
	 */
	public function handle($command)
	{
		$user_id = Auth::user()->id;

		/** @var Client $client */
		$client = Client::where('user_id', $user_id)->get()->first();

		if( ! $client)
			$client = Client::create(array('user_id' => Auth::user()->id));

		$client = $client->edit($command);

		$this->dispatchEventsFor($client);

		return $client;
	}}