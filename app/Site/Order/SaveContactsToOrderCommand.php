<?php namespace Site\Order;

class SaveContactsToOrderCommand
{

    public $orderId;
    public $contactName;
    public $contactPhone;
    public $contactEmail;

    /**
     * SaveContactsToOrderCommand constructor.
     *
     * @param $orderId
     * @param $contactName
     * @param $contactPhone
     * @param $contactEmail
     */
    public function __construct($orderId, $contactName, $contactPhone, $contactEmail)
    {
        $this->orderId      = $orderId;
        $this->contactName  = $contactName;
        $this->contactPhone = $contactPhone;
        $this->contactEmail = $contactEmail;
    }
}