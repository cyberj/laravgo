<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use laravgo\Contact;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', function() {

    return View::make('list')
        ->with('contacts', Contact::all());

});
