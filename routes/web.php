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

//Al acceder a raiz, se ejecuta el controlador TestController y llama la función welcome
Route::get('/', 'TestController@welcome'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
