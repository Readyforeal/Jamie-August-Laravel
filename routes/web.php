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
    return view('index');
});

Route::view('/services', 'services');

Auth::routes();

/* 
// User Dashboard
*/

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/websites', 'HomeController@websites')->name('websites');

Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/billing', 'HomeController@billing')->name('billing');

Route::get('/security', 'HomeController@security')->name('security');

Route::get('/help', 'HomeController@help')->name('help');

Route::get('/start', 'HomeController@start')->name('start');
