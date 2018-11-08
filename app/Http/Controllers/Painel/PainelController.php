<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{	
	public function dashboard()
	{

		return view('painel/dashboard');

	}

	public function setup()
	{

		return view('painel/setup');

	}

}
