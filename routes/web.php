<?php

/*ROTAS DO SITE*/
Route::group(['namespace' => 'Site'], function(){

	Route::get('/', 'SiteController@index');
	Route::get('/contato', 'SiteController@contato');

});

/*ROTAS DO PAINEL*/

//Route::group(['namespace' => 'Painel', 'middleware' => 'auth'], function(){
Route::group(['namespace' => 'Painel'], function(){

	//Route::get('/dashboard/{nome?}', 'PainelController@dashboard')->middleware('auth');
	Route::get('/dashboard', 'PainelController@dashboard');
	Route::get('/setup', 'PainelController@setup');
	Route::get('/login', 'PainelController@login');
	Route::resource('/produtos', 'ProdutoController');

});



/*
Route::get('/', function () {
    return view('welcome');
});
*/