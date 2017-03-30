<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Person;

$app->get('/', function () use ($app) {
    return view('summary', [
        'person' => App\Person::all()->first(),
        'locations' => App\Location::all()->toArray(),
        'phones' => App\Phone::all()->toArray(),
        'mails' => App\Mail::all()->toArray(),
        'educations' => App\Education::all()->toArray()
    ]);
});
