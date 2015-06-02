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

Route::get('/', 'WelcomeController@index');
Route::get('/movies/like/{id}', 'MoviesController@like');
Route::get('/movies/rating/{id}','MoviesController@rating');
Route::get('home', 'HomeController@index');
Route::resource('ratings','RatingsController');
Route::resource('reviews','ReviewsController');
Route::resource('movies','MoviesController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
