<?php

use Illuminate\Http\Request;
use App\Cliente;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes', 'ClienteController@indexApi');
