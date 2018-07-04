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
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');

Route::delete('/delete-comments/{id}', 'CommentsController@destroy')
->name('delete-comments');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/video', 'HomeController@video')->name('video');
Route::get('/diet', 'HomeController@diet')->name('diet');
Route::get('/diet/highcarb', 'HomeController@highcarb')->name('highcarb');
Route::get('/diet/lowcarb', 'HomeController@lowcarb')->name('lowcarb');
Route::get('/diet/vegan', 'HomeController@vegan')->name('vegan');

Route::get('/calc', 'CalcController@calc')->name('calc');
Route::get('/calc/add/{a}/{b}', 'CalcController@add')->name('add');


Route::get('/training', 'TrainingController@training')->name('training');
Route::get('/training/split', 'TrainingController@split')->name('split');
Route::get('/training/fbw', 'TrainingController@fbw')->name('fbw');
Route::get('/training/pushpull', 'TrainingController@pushpull')->name('pushpull');
Route::get('/training/podwyskok', 'TrainingController@podwyskok')->name('podwyskok');
Route::get('/training/pplegs', 'TrainingController@pplegs')->name('pplegs');
Route::get('/training/fbw', 'TrainingController@fbw')->name('fbw');

Route::resource('meals', 'MealController');
Route::resource('exercises','ExerciseController');
Route::resource('profiles','ProfileController');
Route::resource('components','ComponentController');
Route::resource('calculators','CalculatorController');
Route::resource('diets','DietController');

  Route::post('/profiles/{profile}/comments', 'CommentsController@store');

  Route::middleware('role:SuperAdmin')->prefix('superadmin')->group(function () {
   
    Route::resource('roles', 'RoleController')->except(['show']);
    
    Route::get('/assign-roles', 'SuperAdminController@assignRoles')
        ->name('assign-roles');
    Route::post('/update-roles', 'SuperAdminController@updateRoles')
        ->name('update-roles');
    Route::delete('/delete-roles/{id}', 'SuperAdminController@deleteRoles')
        ->name('delete-roles');
});