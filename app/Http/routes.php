<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return redirect()->route('home');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
	Route::get('v1fbshare/{title}/{code}', ['as' => 'fake-content.link', 'uses' => 'FakeContentController@shareLink']);
});

Route::group(['middleware' => ['web', 'auth']], function () {
	Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);
	Route::resource('fake-content', 'FakeContentController', ['except' => ['show', 'index', 'destroy']]);
});
