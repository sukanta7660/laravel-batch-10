<?php

Route::get('/','User\IndexController@index');

Route::group(['middleware' => 'auth'],function(){
			Route::group(['prefix' => 'user'],function(){

			Route::get('/about','User\IndexController@about');
			Route::get('/contact','User\IndexController@contact');

		});
		Route::group(['middleware' => 'admin'],function(){
				Route::group(['prefix' => 'admin'],function(){

						Route::get('dashboard','Admin\DashboardController@index')->middleware('verified');

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

						/*----------------- User ----------------------*/
						Route::get('all-user','Admin\UserController@index');
						Route::get('usertype-update/{id}','Admin\UserController@update_type');
						Route::post('usertype-update','Admin\UserController@update');
						/*----------------- User ----------------------*/

					});
		});

});





Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
