<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{	
	public function __construct()
	{
		//todos os metodos passam pela autenticação
		//$this->middleware('auth');

		//Metodos expecificos passam pela autenticação
		//$this->middleware('auth')->only(['login','setup']);

		//Todos os métodos exceto os definidos
		//$this->middleware('auth')->except(['dashboard']);
		
	}

	public function login()
	{
		return "Vc foi direcionado para pg login :)";
	}


	public function dashboard()
	{
		$nome='Daniel';
		$msg = 'Seja Bem Vindo! ';
		//passando para a variavel com a função compact
		return view('painel.dashboard.dashboard', compact('nome','msg'));

	}

	public function setup()
	{

		return view('painel.setup.setup');

	}	

	public function teste()
	{
		$arrayData = [];

		return view('painel.setup.teste', compact('arrayData'));

	}

}
