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
/*
Route::get('/', function () {
    return view('welcome');
});

// Admin URIs
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
	// Dashboard
	Route::get('/', 'AdminController@index');
});
*/
// Angelhack 2015
Route::group(['namespace' => 'Angel', 'prefix' => 'angel'], function() {
	// Dashboard
	Route::resource('admin', 'AngelController');
});