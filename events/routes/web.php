<?php

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/contact-us', function () {
    return view('contact-us');
});


Auth::routes();
Route::get('/', 'CategoryController@index')->name('home');

Route::get('/home', 'CategoryController@index')->name('home');
Route::resource ('/category','CategoryController');
Route::resource ('/event','EventController');
Route::resource ('/comment','CommentController');


Route::get('/{event_id}/info', 'EventController@info')->name('info');
