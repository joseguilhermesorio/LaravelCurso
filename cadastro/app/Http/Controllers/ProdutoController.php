<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class ProdutoController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create() {
        $categorias = Categoria::all();
        return view('produtos.create', compact('categorias'));
    }

    public function store(Request $request) {
        $dados = $request->all();
        $produto = new Produto();
        $produto->nome = $dados['nome'];
        $produto->estoque = $dados['estoque'];
        $produto->preco = $dados['preco'];
        $produto->categoria_id = $dados['categoria_id'];

        $produto->save();

        return redirect()->route('produto.index');

    }
}
