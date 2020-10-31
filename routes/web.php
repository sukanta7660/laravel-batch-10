<?php

Route::get('/','User\IndexController@index');

Route::group(['prefix' => 'user'],function(){

	Route::get('/about','User\IndexController@about');
	Route::get('/contact','User\IndexController@contact');

});


Route::group(['prefix' => 'admin'],function(){

	Route::get('dashboard','Admin\DashboardController@index');

});


