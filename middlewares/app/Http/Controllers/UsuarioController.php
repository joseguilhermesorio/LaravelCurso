<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
	public function __construct() {
		//$this->middleware('primeiro');
	}

    public function index() {
    	return '<h3>Lista de usuários</h3>'.
		    	'<ul>'.
		    		'<li>João</li>'.
		    		'<li>Jose</li>'.
		    		'<li>Maria</li>'.
		    		'<li>Marcos</li>'.
		    	'</ul>';
    }
}
