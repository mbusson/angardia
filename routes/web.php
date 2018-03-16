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
Route::get('/', function () { 
	return view('welcome'); 
}) ->name('home');
Route::get('/play', 'HomeController@play')->name('play');
Route::get('/create', 'HomeController@create')->name('create');
Route::get('/create2', 'HomeController@create2')->name('create2');
Route::get('/create3', 'HomeController@create3')->name('create3');
Route::get('/create4', 'HomeController@create4')->name('create4');
Route::get('/create5', 'HomeController@create5')->name('create5');
Route::get('/create6', 'HomeController@create6')->name('create6');
Route::get('/logout', 'Auth\LoginController@logout');

// DETAILED ROUTES

// DATABASE SENDS
Route::get('/sendname', 'CharSend@sendName')->name('sendname');
Route::get('/sendclass', 'CharSend@sendClass')->name('sendclass');
Route::get('/sendrace', 'CharSend@sendRace')->name('sendrace');
Route::get('/sendstats', 'CharSend@sendStats')->name('sendstats');
Route::get('/sendavatar', 'CharSend@sendAvatar')->name('sendavatar');
Route::get('/sendfirsttraits', 'CharSend@sendFirstTraits')->name('sendfirsttraits');
Route::get('/confirmcharacter', 'CharSend@confirmCharacter')->name('confirmcharacter');
Route::get('/deletecharacter', 'CharSend@deleteCharacter')->name('deletecharacter');

//AJAX
Route::get('races', 'AjaxController@races')->name('races');

