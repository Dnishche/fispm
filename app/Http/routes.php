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

/*Route::get('home', function () {

    return view('home');
});*/

Route::get('/', 'HomeController@index');

Route::get('/home/', 'HomeController@index');

Route::get('/news/', 'NoAdminNewsController@index');

/*Route::get('/auth/login', function() {
    return View::make('auth/login');
});*/

//Route::resource('news', 'NewsController');

Route::get('/news/{titles}/', ['as' => 'allForCurrentNews', 'uses' => 'NoAdminNewsController@show']);
