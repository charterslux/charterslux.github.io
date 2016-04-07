<?php namespace Site\Client;

use Client;

class GetClientByPhoneQuery
{

    public $phone;

    /**
     * GetClientByPhoneQuery constructor.
     *
     * @param $phone
     */
    public function __construct($phone)
    {
        $this->phone = (new Client())->numberize($phone);
    }
}