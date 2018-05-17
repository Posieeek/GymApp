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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/calc', 'HomeController@calc')->name('calc');

Route::get('/gallery', 'HomeController@gallery')->name('gallery');

Route::get('/diet', 'HomeController@diet')->name('diet');

Route::get('/training', 'HomeController@training')->name('training');