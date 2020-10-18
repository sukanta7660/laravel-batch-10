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

	Route::get('contact',function(){
		return view('user.contact');
	});

});


Route::group(['prefix' => 'admin'],function(){

	Route::get('dashboard','Admin\DashboardController@index');

});


