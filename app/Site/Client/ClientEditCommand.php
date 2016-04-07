<?php namespace Site\Client;

class ClientEditCommand {

	public $suffix_id;
	public $last_name;
	public $first_name;
	public $phone_number;
	public $borned_at;
	public $preferred_language;

	/**
	 * @param $suffix
	 * @param $last_name
	 * @param $first_name
	 * @param $phone_number
	 * @param $borned_at
	 * @param $preferred_language
	 *
	 * @internal param $sex
	 */
	function __construct($suffix, $last_name, $first_name, $phone_number, $borned_at, $preferred_language)
	{
		$this->suffix       = $suffix;
		$this->last_name    = $last_name;
		$this->first_name   = $first_name;
		$this->phone_number = $phone_number;
		$this->borned_at    = $borned_at;
		$this->preferred_language = $preferred_language;
	}
}