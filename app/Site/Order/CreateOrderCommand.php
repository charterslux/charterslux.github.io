<?php namespace Site\Order;

class CreateOrderCommand
{

    public $airport_from;
    public $airport_to;
    public $departure_date;
    public $departure_time;
    public $passengers;
    /**
     * @var null
     */
    public $id;

    /**
     * CreateOrderCommand constructor.
     *
     * @param null $id
     * @param      $airport_from
     * @param      $airport_to
     * @param      $departure_date
     * @param      $departure_time
     * @param      $passengers
     */
    public function __construct($id = null, $airport_from, $airport_to, $departure_date, $departure_time, $passengers)
    {
        $this->airport_from   = $airport_from;
        $this->airport_to     = $airport_to;
        $this->departure_date = $departure_date;
        $this->departure_time = $departure_time;
        $this->passengers     = $passengers;
        $this->id             = $id;
    }
}