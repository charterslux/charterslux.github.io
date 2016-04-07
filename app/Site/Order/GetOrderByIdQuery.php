<?php namespace Site\Order;

class GetOrderByIdQuery
{

    public $id;

    /**
     * GetOrderByIdQuery constructor.
     *
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = intval($id);
    }
}