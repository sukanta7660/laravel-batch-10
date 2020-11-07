<?php

Route::get('/','User\IndexController@index');

Route::group(['prefix' => 'user'],function(){

	Route::get('/about','User\IndexController@about');
	Route::get('/contact','User\IndexController@contact');

});


Route::group(['prefix' => 'admin'],function(){

	Route::get('dashboard','Admin\DashboardController@index');

	/*----------------- Category ------------------*/
	Route::get('all-category','Admin\CategoryController@index');
	Route::get('create-category','Admin\CategoryController@create');
	Route::post('store-category','Admin\CategoryController@store');
	Route::get('delete-category/{id}','Admin\CategoryController@delete');
	/*----------------- Category ------------------*/

});


