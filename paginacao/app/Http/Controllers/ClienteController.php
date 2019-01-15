<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ClienteController extends Controller
{
    public function index() {
    	$clientes = Clientes::paginate(10);
    	return view('index',compact('clientes'));
    }

    public function indexjs() {
    	return view('indexjs');
    }

    public function indexjson() {
    	return Clientes::paginate(10);
    }


}
