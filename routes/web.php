<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@show')->middleware('auth');

Route::get('/addTodo', 'App\Http\Controllers\AddTodoController@index')->middleware('auth');;

Route::post('/addTodo/added', 'App\Http\Controllers\AddTodoController@store')->middleware('auth');;

Route::get('/edit/{id}', 'App\Http\Controllers\AddTodoController@edit')->middleware('auth');;

Route::post('/update/{id}', 'App\Http\Controllers\AddTodoController@update')->middleware('auth');;

Route::get('/delete/{id}', 'App\Http\Controllers\AddTodoController@destroy')->middleware('auth');;

