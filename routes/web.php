<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postIndex');
Route::get('/', 'basecontroller@getIndex');

Route::get('{url}', 'MaintextController@getIndex');

