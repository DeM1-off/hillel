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
    return view('layout');
});

Route::get('home1/index', 'Home1Controller@index')->name('home1.index');
Route::get('home1/get', 'Home1Controller@get')->name('home1.get');
Route::get('home1/comment', 'Home1Controller@comment')->name('home1.comment');