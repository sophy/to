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

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('groups', 'GroupsController');

Route::resource('users', 'UsersController');
Route::get('register', 'UsersController@register');
Route::post('register', 'UsersController@postRegister');
Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@postLogin');
Route::get('logout', 'LoginController@logout');


Route::resource('photos', 'PhotosController');
Route::resource('upload', 'PhotosController@create');
Route::resource('upload-photos', 'PhotosController@store');
Route::resource('new-photos', 'PhotosController@uploadPhotos');

Route::resource('provinces', 'ProvincesController');

Route::resource('users', 'UsersController');

Route::resource('location', 'LocationsController');
Route::get('new-location', 'LocationsController@create');
Route::post('new-location', 'LocationsController@store');
Route::get('location-map/{id}', 'LocationsController@setMap')->where('id', '\d+');
Route::post('location-map', 'LocationsController@storeMap');
Route::post('new-location', 'LocationsController@store');
