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
Route::get('/home/about', function () {
    return view('/home/about');
})->name('home.about');

Route::get('/home/count', function () {
    return view('home/count');
})->name('home.count');

Route::get('/home/comment', function () {
    return view('home/comment');
})->name('home.comment');

//Laravel. Work with models

Route::resource('pay','PayController');
Route::resource('income','IncomeController');

Route::get('finanse/income/sum', 'IncomeController@sum')->name('income.sum');
Route::get('finanse/route', function () {
    return view('finanse/route');})->name('finanse.route');
Route::get('finanse/pay/sum', 'PayController@sum')->name('pay.sum');






