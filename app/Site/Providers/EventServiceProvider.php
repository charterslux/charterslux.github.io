<?php namespace Site\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['events']->listen('Site.*', 'Site\Listeners\EmailNotifier');
		$this->app['events']->listen('Site.*', 'Site\Listeners\ERPUpdater');
	}
}