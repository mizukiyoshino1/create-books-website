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

// index画面を表示
Route::get('/home', 'HomeController@home')->name('home.books');
Auth::routes();

// Authホーム画面
Route::get('/home', 'HomeController@index')->name('home');