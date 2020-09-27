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
	$class = "Batch";
	$class1 = "10";
    return view('pages.welcome',compact('class','class1'));
});

Route::get('calcu',function(){
	echo 100*10000;
});

Route::get('about',function(){
	$class = "Batch";
	$class1 = "10";
	return view('pages.about')->with(['ss' => $class]);
})->name('student.info');

Route::get('contact',function(){
	return view('pages.contact');
});