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

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', 'HomeController@index');
Route::get('guru/add','HomeController@add_guru');
Route::get('guru/all','HomeController@all_guru');
Route::auth();
Route::get('/home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('login','Auth\AuthController@getLogin');
Route::get('logout','Auth\AuthController@getLogout');
Route::post('login','Auth\AuthController@postLogin');
Route::auth();
Route::get('/home', 'HomeController@index');

Route::post('guru/task/save', 'HomeController@addtasksave');
