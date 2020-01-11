<?php

Auth::routes();
Route::group(['middleware'=>['lang']], function(){
	Route::get('/', 'BaseController@getIndex');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postIndex');
Route::get('category/{id}', 'CatalogController@getCategory');
Route::get('{url}', 'MaintextController@getIndex');

