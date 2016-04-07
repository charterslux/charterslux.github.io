<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::pattern('id', '[0-9]+');

Route::group(['prefix' => I18n::setLocale()],
    function (Illuminate\Routing\Router $router) {

        Route::get('/', 'HomeController@showWelcome');

        Route::controller('test', 'TestController');
        Route::controller('auth', 'AuthController');
        Route::controller('user', 'UserController');
        Route::controller('order', 'OrderController');

        Route::group([
            'namespace' => 'API',
            'prefix'    => 'api',
        ],
            function () {
                Route::group(['before' => 'csrf'],
                    function () {
                        Route::controller('subscribe', 'SubscriptionController');
                    }
                );

                Route::get('modal-body/{bodyName}/{param_1?}/{param_2?}', 'HelpersController@getModalBody');
                Route::get('page/mobile', 'HelpersController@getPageContent');
                Route::get('localization', 'LocalizationController@getIndex');
                Route::controller('helpers', 'HelpersController');

                Route::any('ac/classes_makers', 'AcController@anyClasses_Makers');
                Route::any('catalog', 'CatalogController@getCatalog');
                Route::controller('ac', 'AcController');
                Route::controller('catalog', 'CatalogController');
                Route::get('order/{orderId}/contacts/modal',
                    ['as' => 'api.order.contacts.saveModal', 'uses' => 'OrderController@saveOrderContactsModal']
                );
                Route::post('order/contacts/save',
                    ['as' => 'api.order.contacts.save', 'uses' => 'OrderController@saveContactsToOrder']
                );
                Route::post('order/set',
                    ['as' => 'api.order.save', 'uses' => 'OrderController@saveOrder']
                );
//                Route::controller('order', 'OrderController');

                Route::group(['before' => 'api_auth'],
                    function () {
                        Route::any('auth/logout', 'AuthController@anyLogout');
                        Route::controller('user', 'UserController');
                    }
                );
                Route::controller('auth', 'AuthController');
                //	Route::get('/', 'HomeController@showWelcome');
            }
        );
    }
);
/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404',
    function () {
        return Response::error('404');
    }
);

Event::listen('500',
    function () {
        return Response::error('500');
    }
);

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before',
    function () {
        // Do stuff before every request to your application...
    }
);

Route::filter('after',
    function ($response) {
        // Do stuff after every request to your application...
    }
);

Route::filter('auth',
    function () {
        if (Auth::guest()) {

            // this code ensures that even when the request is AJAX, the user will be redirected to the login page. Neat!
            if (Request::ajax()) {
                $data = [
                    "location" => '../login'
                ];

                return Response::json($data);
            }

            return Redirect::to('login');
        }
    }
);

Route::filter('is_ajax',
    function () {
        if ( ! Request::ajax()) {
            App::abort(500, 'Bad ajax request');
        }
    }
);
Route::filter('api_auth', 'API_AuthFilter@check');

// Display all SQL executed in Eloquent
Event::listen('illuminate.query',
    function ($query) {
//	var_dump($query);
    }
);