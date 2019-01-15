<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;

use App\Cliente;

class ClienteController extends Controller
{
    public function index() {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create() {
        return view('clientes.create');
    }

    public function store(ClienteRequest $request) {
        
        $dados = $request->all();
        $request->validate([$dados]);

        $cliente            = new Cliente();
        $cliente->nome      = $dados['nome'];
        $cliente->idade     = $dados['idade'];
        $cliente->endereco  = $dados['endereco'];
        $cliente->email     = $dados['email'];
        $cliente->save();
        

        return redirect()->route('cliente.index');
    }

    public function delete($id) {
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('cliente.index');
    }
}
