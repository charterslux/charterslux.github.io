<?php namespace Site\User;

class UserSubscribeCommand {

    /**
     * @var string
     */
    public $email;

    /**
     * Constructor
     *
     * @param string $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

}