<?php

class Order_Status extends \Eloquent {

	protected $table = 'order_statuses';

	protected $fillable = ['class', 'name'];
}