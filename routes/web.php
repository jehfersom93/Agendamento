<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('events', 'EventController@index');
Route::resource('events', 'EventsController',['only' => ['index', 'store', 'update', 'destroy']]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

