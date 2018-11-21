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
	Route::get('/painel/dashboard', 'PainelController@dashboard');
	Route::get('/painel/setup', 'PainelController@setup');
	Route::get('/painel/login', 'PainelController@login');
	Route::get('/painel/teste', 'ProdutoController@teste');
	Route::resource('/painel/produtos', 'ProdutoController');

});



/*
Route::get('/', function () {
    return view('welcome');
});
*/