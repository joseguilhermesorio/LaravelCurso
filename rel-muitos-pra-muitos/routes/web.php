<?php

use App\Projeto;
use App\Desenvolvedor;
use App\Alocacao;

Route::get('/desenvolvedorprojeto', function () {
    $desenvolvedores = Desenvolvedor::with(['projetos'])->get();
    foreach($desenvolvedores as $dev) {
    	$projetos = $dev->projetos;
    		foreach($projetos as $proj){
    			echo "<p>Nome: $dev->nome, Projeto:". $proj->nome."Horas do projeto: ".$proj->estimativa_horas.", Horas Semanais:". $proj->pivot->horas_semanais ." </p>";
    		}
    }
});

Route::get('/projetodesenvolvedores', function() {
	$projetos = Projeto::with(['desenvolvedores'])->get();
	foreach($projetos as $proj) {
		$dev = $proj->desenvolvedores;
		foreach($dev as $d) {
			echo "<p>Projeto: $proj->nome, Desenvolvedor:". $d->nome.", Horas Semanais:".$d->pivot->horas_semanais."</p>";
		}
	}
	
});

Route::get('/alocar', function() {
	$projeto = Projeto::find(3);
	if(isset($projeto)) {
		//Associa o desenvolvedor ao projeto
		$projeto->desenvolvedores()->attach(2, ['horas_semanais' => 90]);
		return $projeto->toJson();
	}
});


//Funcao para desalocar um desenvolvedor de um projeto
Route::get('/desalocar', function() {
	$projeto = Projeto::find(3);
	if(isset($projeto)){
		$projeto->desenvolvedores()->detach(2);
		return $projeto->toJson();
	}
});