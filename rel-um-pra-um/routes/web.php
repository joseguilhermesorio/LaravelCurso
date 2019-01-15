<?php

use App\Cliente;
use App\Endereco;


Route::get('/clientes', function () {
	$clientes = Cliente::all();
    foreach($clientes as $c) {
    	echo "<p>$c->nome : $c->telefone </p>";
    	echo "<p>Endereço: ". $c->endereco->rua ."</p>";
    }
});

Route::get('/enderecos', function() {
	$enderecos = Endereco::all();
	foreach($enderecos as $e) {
		echo "<p>$e->rua : $e->bairro : $e->cidade</p>";
		echo "<p>Nome do Cliente: ". $e->cliente->nome."</p>";
		echo "<p>Telefone do Cliente: ". $e->cliente->telefone."</p>";
		echo "<hr>";
	}
});

Route::get('/inserir', function() {
	$c = new Cliente();
	$c->nome = "Jose Almeida";
	$c->telefone = "11 98877-9988";
	$c->save();
	$e = new Endereco();
	$e->rua = "Av do Estado";
	$e->numero = 400;
	$e->bairro = "Centro";
	$e->cidade = "Sao Paulo";
	$e->uf = "SP";
	$e->cep = "07744-009";

	$c->endereco()->save($e);
});

Route::get('/clientes/json', function() {
	$clientes = Cliente::with(['endereco'])->get();
	return $clientes->toJson();
});

Route::get('/enderecos/json', function() {
	$enderecos = Endereco::with(['cliente'])->get();
	return $enderecos->toJson();
});