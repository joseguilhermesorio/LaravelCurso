<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos', 'ProdutoController@index');

Route::get('/negado', function() {
	return "Acesso Negado";
})->name('negado');

Route::post('/login', function(Request $request) {
	$login_ok = false;
	$admin = false;
	switch($request->input('user')){
		case 'joao':
			$login_ok = $request->input('passwd') === 'senhajoao';
			$admin = true;
		break;

		case 'marcos':
			$login_ok = $request->input('passwd') === 'senhamarcos';
		break;

		case 'default':
			$login_ok = false;
	}

	if($login_ok) {
		$login = ['user' => $request->input('user'), 'admin' => $admin];
		$request->session()->put('login', $login);
		return response("Ok", 200);
	}
	else {
		$request->session()->flush();
		return response('Erro', 401);
	}
});

Route::get('/logout', function(Request $request) {
	$request->session()->flush();
	return response('Deslogado com sucesso', 200);
});