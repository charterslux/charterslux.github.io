<?php

class TestController extends BaseController {

	public function getEmailRegistered()
	{
		return View::make('emails.user.registered');
	}

	public function getEmailReminder()
	{
		return View::make('emails.auth.reminder', ['token' => Str::random(32)]);
	}

	public function getEmailSubscribe()
	{
		return View::make('emails.subscribe');
	}

	public function getUpdateErpUser()
	{
		$user = Auth::user();
		$client = $user->client->id;

		Queue::push('Site\Queues\UpdateERPUser', ['client_id' => $client]);
	}
}