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

Route::get('/','User\IndexController@index');

Route::get('calcu','IndexController@calcu1');

Route::get(md5('about'),'User\IndexController@about')->name('student.info');

Route::get('contact',function(){
	return view('pages.contact');
});