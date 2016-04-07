<?php namespace Site\Client\Events;

use Client;

class ClientUpdated {

	public $client;

	/**
	 * @param Client $client
	 */
	function __construct($client)
	{
		$this->client = $client;
	}
}