<?php namespace API;

use Site\User\UserSubscribeCommand;

/**
 * SubscriptionController
 *
 * @namespace API
 * @route Route::get('/', 'SubscriptionController@index');
 * @author Sergey Gladkovskiy <smgladkovskiy@gmail.com>
 */

class SubscriptionController extends BaseController {

	public function anyIndex()
	{
		$this->execute(UserSubscribeCommand::class);

		return $this->respondWithSuccess(trans('messages.subscription.success'));
	}

}
