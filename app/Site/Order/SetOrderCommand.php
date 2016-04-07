<?php namespace Site\Order;

class SetOrderCommand {

    /**
     * @var string
     */
    public $id;

    /**
     * @var array
     */
    public $tails;

    /**
     * @var array
     */
    public $legs;

    /**
     * @var array
     */
    public $class_ids;

    /**
     * @var array
     */
    public $maker_ids;

	/**
	 * Constructor
	 *
	 * @param string|null  $id
	 * @param array        $tails
	 * @param array        $legs
	 * @param array        $class_ids
	 * @param array        $maker_ids
	 */
    public function __construct($id = NULL, $tails = [], $legs, $class_ids = [], $maker_ids = [])
    {
        $this->id        = $id;
        $this->tails     = $tails;
        $this->legs      = $legs;
        $this->class_ids = $class_ids;
        $this->maker_ids = $maker_ids;
    }

}