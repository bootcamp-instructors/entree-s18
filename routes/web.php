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
	// dd($_SERVER);
    return view('welcome');
});

Route::get('/v1/menu/{count}', 'MenuController@page');
Route::get('/v1/menu', 'MenuController@index');
