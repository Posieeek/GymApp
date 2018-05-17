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
Route::get('/diet/highcarb', 'HomeController@highcarb')->name('highcarb');
Route::get('/diet/lowcarb', 'HomeController@lowcarb')->name('lowcarb');
Route::get('/diet/vegan', 'HomeController@vegan')->name('vegan');


Route::get('/training', 'TrainingController@training')->name('training');
Route::get('/training/split', 'TrainingController@split')->name('split');
Route::get('/training/fbw', 'TrainingController@fbw')->name('fbw');
Route::get('/training/pushpull', 'TrainingController@pushpull')->name('pushpull');
Route::get('/training/podwyskok', 'TrainingController@podwyskok')->name('podwyskok');
Route::get('/training/pplegs', 'TrainingController@pplegs')->name('pplegs');
Route::get('/training/fbw', 'TrainingController@fbw')->name('fbw');
Route::get('/training/fbw', 'TrainingController@fbw')->name('fbw');
Route::get('/training/fbw', 'TrainingController@fbw')->name('fbw');
