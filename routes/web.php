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
    return view('auth/login');
});

Route::get('welcome', function () {
    return view('welcome');
})->middleware('auth');

Route::get('admin', function () {
    return view('admin.index');
})->middleware('auth');

// Route::resource('article', 'ArticleController')->middleware('auth');

Route::resource('article', 'ArticleController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
