<?php

use Carbon\Carbon;

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        $passengers[null] = null;
        for ($i = 1; $i <= 25; $i++) {
            $passengers[$i] = $i . ' ' . Lang::choice('chunks.words.passengers', $i);
        }

        $departureTimeIntervals[null] = null;
        $dayStart                     = Carbon::now()->startOfDay();
        $dayEnd                       = $dayStart->copy()->endOfDay();
        for ($i = $dayStart; $i < $dayEnd; $i->addMinutes(30)) {
            $time                          = $i->format('H:i');
            $departureTimeIntervals[$time] = $time;
        }

        return View::make('content.home', compact('passengers', 'departureTimeIntervals'));
    }

}
