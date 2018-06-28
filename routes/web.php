<?php

Route::get('/', function () {
    return view('welcome');
});
Route::resource('events', 'EventsController',['only' => ['index', 'store', 'update', 'destroy']]);
Route::get('events', 'EventController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
