<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProdutoController extends Controller {

	public function __construct() {
		$this->middleware('auth');//Protecao do middleware de Login
	}

    public function index() {
    	echo "<h4>Lista de Produtos</h4>";
    	echo "<ul>";
    	echo "<li>Macarrão</li>";
    	echo "<li>Feijao</li>";
    	echo "<li>Carne</li>";
    	echo "<li>Arroz</li>";
    	echo "</li>";
    }
}
