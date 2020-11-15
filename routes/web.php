<?php

Route::get('/','User\IndexController@index');

Route::group(['prefix' => 'user'],function(){

	Route::get('/about','User\IndexController@about');
	Route::get('/contact','User\IndexController@contact');

});


Route::group(['prefix' => 'admin'],function(){

	Route::get('dashboard','Admin\DashboardController@index');

	/*----------------- Blog ------------------*/
	Route::get('all-blog','Admin\BlogController@index');
	Route::get('create-blog','Admin\BlogController@create');
	Route::get('update-blog/{id}','Admin\BlogController@update_page');
	Route::post('update-blog','Admin\BlogController@update');
	Route::post('store-blog','Admin\BlogController@store');
	Route::get('delete-blog/{id}','Admin\BlogController@delete');
	/*----------------- Blog ------------------*/

	/*----------------- Category ------------------*/
	Route::get('all-category','Admin\CategoryController@index');
	Route::get('create-category','Admin\CategoryController@create');
	Route::get('update-category/{id}','Admin\CategoryController@update_page');
	Route::post('update-category','Admin\CategoryController@update');
	Route::post('store-category','Admin\CategoryController@store');
	Route::get('delete-category/{id}','Admin\CategoryController@delete');
	/*----------------- Category ------------------*/

});


