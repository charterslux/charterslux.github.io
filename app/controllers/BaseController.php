<?php

class BaseController extends Controller {

	protected $layout = 'layouts.master';

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			/** @var User|null $user */
			$user = NULL;

			if(Auth::check())
				$user = User::findOrFail(Auth::user()->id);

			View::share('user', $user);

			$orders = [];

			if($user)
				$orders = $user->count_orders();

			View::share('orders', $orders);

			$this->layout = View::make($this->layout);
		}
	}
}
