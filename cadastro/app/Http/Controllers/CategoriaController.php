<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::get();
        return view('categorias.index', compact('categorias'));
    }

    public function create() {
        return view('categorias.create');
    }

    public function store(Request $request) {
        $dados = $request->all();
        $cat = new Categoria();
        $cat->nome = $dados['nome'];
        $cat->save();
    
        return redirect()->route('categoria.index');
    }

    public function edit($id) {
        $categoria = Categoria::find($id);
        $categoria->all();
        return view('categorias.edit',compact('categoria'));
    }

    public function update(Request $request, $id) {
        $dados = $request->all();

        $categoria = Categoria::find($id);
        $categoria->nome = $dados['nome'];
        $categoria->save();
        return redirect()->route('categoria.index');
    }  


    public function delete($id) {
        $delete = Categoria::find($id);
        $delete->delete();
        return redirect()->route('categoria.index');
    }
}
