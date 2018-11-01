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

Route::get('/', 'pagesController@home')->name('home');
Route::get('/about', 'pagesController@about')->name('about');
Route::get('/contact', 'pagesController@contact')->name('contact');
Route::post('/contact', 'pagesController@store')->name('contact.Store');
Route::get('/thanks/{name}', 'pagesController@thanks')->name('thanks');

