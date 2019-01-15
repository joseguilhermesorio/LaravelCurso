@extends('layout.app',['current' => 'Produtos'])
@section('titulo', 'Novo Produto')

@section('conteudo')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Criar Novo Produto</h5>
        <form action="{{ route('produto.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <label for="nome">Nome Produto:</label>
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <label for="estoque">Estoque:</label>
                        <input type="number" name="estoque" id="estoque" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="preco">Preço:</label>
                        <input type="text" name="preco" id="preco" class="form-control">
                    </div>
                    <div class="col-4">
                        <label for="categoria">Categoria:</label>
                        <select name="categoria_id" id="categoria" class="form-control">
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-md-12">
                    <button class="btn btn-primary" role="button">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection