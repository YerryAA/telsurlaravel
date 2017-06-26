<?php

namespace TelSUR\Http\Controllers;

use Illuminate\Http\Request;

use TelSUR\Http\Requests;

class InicioController extends Controller
{
     public function __construct()
    {
    	$this->middleware('auth');
    }
    public function index(Request $request)
    {
	return view('instituto.inicio.index');
    }
}
