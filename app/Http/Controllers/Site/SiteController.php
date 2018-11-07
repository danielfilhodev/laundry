<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
    	//return "Home Site Ctrl";
    	return view('site/home');
    }
    public function contato()
    {
    	return view('site/contato');
    }

}
