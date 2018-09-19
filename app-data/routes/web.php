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

// Route::get('/tasks', 'TasksController@index')->name('home');

Route::get('auth/callback/{provider}', 'Auth\LoginController@callback');
Route::get('auth/redirect/{provider}', 'Auth\LoginController@redirect');

Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
// Route::get("/{id}/complete", "TaskController@complete");
Route::delete('/delete/{id}', 'TaskController@destroy');

Route::get('/task/{id}', 'TaskController@getTask');
Route::post('/task/{id}', 'TaskController@editTask');

Route::get('/guidelines', 'GuidelinesController@index');
