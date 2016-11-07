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
Route::get('/', 'HomeController@home')->name('home');

Route::get('download', 'HomeController@download')->name('download');

Route::get('upload', 'HomeController@upload')->name('upload');

Route::get('sign-in', 'HomeController@signIn')->name('sign-in');

Route::get('sign-up', 'HomeController@signUp')->name('sign-up');

Route::post('store', 'HomeController@store')->name('store');