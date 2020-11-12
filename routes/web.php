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

//we need to override specific routes from Fortify
Route::get('/login', 'IndexController@index');
Route::get('/register', 'IndexController@index');

Route::get('/{path?}', 'IndexController@index')->name('index')->where('path', '.*'); //zero or more of anything