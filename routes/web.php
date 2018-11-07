<?php

Route::get('/', 'SiteController@index');

Route::group(['namespace' => 'Site'], function(){

	Route::get('/', 'SiteController@index');
	Route::get('/contato', 'SiteController@contato');

});

Route::group(['namespace' => 'Painel'], function(){

	/*
	Route::get('',function(){

	});
	*/

});



/*
Route::get('/', function () {
    return view('welcome');
});
*/