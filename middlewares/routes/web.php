<?php

Route::get('/usuarios', 'UsuarioController@index')
	->middleware('primeiro')
	->middleware('segundo');


Route::get('/terceiro', function() {
	return "Passou pelo terceiro middleware";
})->middleware('terceiro:joao, 20');