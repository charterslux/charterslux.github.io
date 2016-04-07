<?php

require_once 'XML/RPC2/Client.php';

class XMLRPC_Proxy
{
	private $server;

	public function __construct($server = 'flight'){
		$this->server = $server;
		$current_er = error_reporting();
		error_reporting(E_ALL & ~(E_STRICT|E_NOTICE));
		$config = Config::get('xmlrpc');
		$client = XML_RPC2_Client::create($config['server_url'].'common');
		$this->uid = $client->login($config['dbname'], $config['user'], $config['password']);
		$this->password = $config['password'];
		$this->dbname = $config['dbname'];
		$this->rpc = XML_RPC2_Client::create($config['server_url'].'object', array('encoding'=>'utf-8'));
		error_reporting($current_er);
	}

	public function __invoke(){
		$args = array($this->server);
		$args = array_merge_recursive($args, func_get_args());
		array_unshift($args, $this->dbname, $this->uid, $this->password);
		return call_user_func_array(array($this->rpc, 'execute'), $args);
	}
}