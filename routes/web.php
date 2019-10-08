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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/nav', function(){
	return view('layouts/nav');
});

// route::get('/pertanyaan', function(){
// 	return view('v_pertanyaan_diagnosa');
// });

route::resource('diagnosa', 'c_awal_diagnosa');

route::resource('pertanyaan','c_pertanyaan_diagnosa');