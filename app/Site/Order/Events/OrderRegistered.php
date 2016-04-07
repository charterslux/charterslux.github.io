<?php namespace Site\Order\Events;

class OrderRegistered
{

    public $orderId;

    /**
     * OrderRegistered constructor.
     *
     * @param $orderId
     */
    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }
}