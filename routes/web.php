<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sps', 'LedController@index');
Route::get('/sps_1', 'LedController@sps_1');

Route::get('/mnb', 'MnbController@index');

Route::get('/led', 'LedController@led');
Route::get('/led_all', 'LedController@all');

// Route::get('/player', 'PlayerController@index');
Route::resource('/player', 'PlayerController');

Route::resource('/point', 'PointController');



Route::auth();


		Route::resource('admin/player', 'Admin\\PlayerController');
		Route::resource('admin/country', 'Admin\\CountryController');
		Route::resource('admin/category', 'Admin\\CategoryController');
		Route::resource('admin/item', 'Admin\\ItemController');
		Route::resource('admin/point', 'Admin\\PointController');
		Route::resource('admin/schedule', 'Admin\\ScheduleController');
		Route::resource('admin/posts', 'Admin\\PostsController');
		Route::resource('admin/angilal', 'Admin\\AngilalController');
		Auth::routes();

		Route::get('/home', 'HomeController@index')->name('home');


