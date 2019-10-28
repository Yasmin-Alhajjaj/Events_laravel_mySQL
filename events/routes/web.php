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
    return view('Home.category');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});


Auth::routes();

Route::get('/home', 'CategoreyController@index')->name('home');
Route::resource ('/category','CategoryController');
Route::resource ('/event','EventController');


