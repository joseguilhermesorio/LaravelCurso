@extends('layout.app', ['current' => 'categorias'])
@section('titulo', 'Editar Categoria')

@section('conteudo')
    <div class="card border">
        <div class="card-body">
            <h4>Editar Categoria {{ $categoria->nome }}</h4>
            <form action="{{ route('categoria.update',[$categoria->id]) }}" method="post">
                {{ csrf_field() }}
                @method('put')
                <div class="form-group">
                    <div class="col-xs-12 col-md-12">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" value="{{ $categoria->nome }}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-md-12">
                        <button class="btn btn-primary btn-md">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection