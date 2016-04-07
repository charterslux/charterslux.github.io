<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

use Site\Order\Events\OrderEventHandler;

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

Event::subscribe(OrderEventHandler::class);

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/
if(App::environment() == 'production')
{
	$monolog = Log::getMonolog();
	$client  = new Raven_Client('https://1ae491d775dc4866ad9b6e9179c002db:a3d8e76ad3f442febc85fad76c9314b7@app.getsentry.com/26028');
	$handler = new Monolog\Handler\RavenHandler($client, Monolog\Logger::ERROR);
	$handler->setFormatter(new Monolog\Formatter\LineFormatter("%message% %context% %extra%\n"));
	$monolog->pushHandler($handler);
}
else
{
	Log::useFiles(storage_path().'/logs/laravel.log');
}


/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/



App::error(function(Exception $exception, $code)
{
	Log::error($exception);
	if (App::environment() == 'production' AND (Request::segment(2) == 'api' OR Request::segment(2) == 'ajax' OR Request::segment(1) == 'api' OR Request::segment(1) == 'ajax'))
	{
		return API\Response::json(array('error' => 'Unexpected server error!'), 500);
	}
});

App::error(function(API\Exception\Exception $exception, $code)
{
	Log::error($exception);
	$response = new API\Response();
	$errorType = $exception->getErrorType();
	$respondMethod = 'respondWith'.$errorType;
	return $response->$respondMethod($exception->getErrors());
});

App::missing(function($exception)
{
	Log::error($exception);

	if (Request::segment(2) == 'api' OR Request::segment(2) == 'ajax' OR Request::segment(1) == 'api' OR Request::segment(1) == 'ajax')
	{
		return API\Response::json(array('error' => trans('errors.resource_not_found')), 404);
	}
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';
