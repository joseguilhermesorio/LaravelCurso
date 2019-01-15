<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoController extends Controller
{
    public function index() {
    	echo "<h4>Lista de Categorias</h4>";
    	echo "<ul>";
    	echo "<li>Alimentos</li>";
    	echo "<li>Eletronicos</li>";
    	echo "<li>Móveis</li>";
    	echo "<li>Informática</li>";
    	echo "</li>";

    	if(Auth::check()) {
    		$user = Auth::user();
    		echo "<hr>";
    		echo "<h4>Voce está logado como $user->name</h4>";
    		echo "<h4>Email $user->email</h4>";
    	}else {
    		echo "<h4>Voce nao está logado!</h4>";
    	}
    }
}
