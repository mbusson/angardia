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
Auth::routes();

// CLASSIC ROUTES
Route::get('/play', 'HomeController@play')->name('play');
Route::get('/create', 'HomeController@create')->name('create');
Route::get('/create2', 'HomeController@create2')->name('create2');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// DETAILED ROUTES

// DATABASE SENDS
Route::get('/sendname', 'CharSend@sendName')->name('sendname');
Route::get('/sendclass', 'CharSend@sendClass')->name('sendclass');
Route::get('/sendrace', 'CharSend@sendRace')->name('sendrace');
Route::get('/sendstats', 'CharSend@sendStats')->name('sendstats');

Route::get('/', function () { 
	return view('welcome'); 
}) ->name('home');