<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postIndex');
Route::get('/', 'basecontroller@getIndex');
Route::get('category/{id}', 'CatalogController@getCategory');
Route::get('{url}', 'MaintextController@getIndex');

