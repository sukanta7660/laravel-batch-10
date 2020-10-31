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

// <a href="{{action('User\IndexController@index')}}">JHGfhjgfhjg</a>

Route::get('/','User\IndexController@index');

Route::group(['prefix' => 'user'],function(){

//Route::get('/','User\IndexController@class');
	//Route::get('/','User\IndexController@index');
	Route::get('/about','User\IndexController@about');
	Route::get('/contact','User\IndexController@contact');

});


Route::group(['prefix' => 'admin'],function(){

	Route::get('dashboard','Admin\DashboardController@index');

});


