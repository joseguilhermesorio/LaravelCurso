@extends('layout.app', ["current" => "categorias"])
@section('titulo', 'Categorias')

@section('conteudo')

<div class="card border">
    <div class="card-body">
        <h4 class="float-left">Categorias</h4>
            @component('components._tabela',[
                'class_table' => 'table table-bordered table-hover'
            ])
            @slot('thead')
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
            @endslot
            @slot('tbody')
                <tbody>
                @if(count($categorias) > 0)
                    @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nome}}</td>
                        <td>
                            <a href="{{ route('categoria.edit',[$categoria->id]) }}" class="btn btn-primary" type="button">Editar</a>
                            <a href="{{ route('categoria.delete',[$categoria->id]) }}" class="btn btn-danger" type="button">Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                   <tr>
                       <td colspan="3" align="center"> <h5>Sem dados para exibir</h5></td>
                   </tr>
                @endif
                </tbody>
            @endslot
            @endcomponent
        </div>
        <div class="card-footer">
            <a href="{{ route('categoria.create') }}" type="button" class="btn btn-secondary float-right">Cadastrar</a>
        </div>
</div>

@endsection