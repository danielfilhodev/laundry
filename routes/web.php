<?php

Route::group(['namespace' => 'Site'], function(){

	Route::get('/', 'SiteController@index');
	Route::get('/contato', 'SiteController@contato');

});

Route::group(['namespace' => 'Painel'], function(){

	Route::get('/dashboard', 'PainelController@dashboard');
	Route::get('/setup', 'PainelController@setup');


});



/*
Route::get('/', function () {
    return view('welcome');
});
*/