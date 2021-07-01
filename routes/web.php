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
    return view('welcome');
});

Route::get('/api', 'ApiController@index');

// test first page (view)
Route::view('/test', 'react.react-test');

// react authentication
Route::view('/register', 'react.register');
Route::view('/login', 'react.login');
