@extends('layout.app', ["current" => "produtos"])
@section('titulo', 'Produtos')

@php
    use App\Categoria;

@endphp

@section('conteudo')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Produtos</h5>
        @component('components._tabela',[
            'class_table' => 'table table-bordered table-hover'
        ])
            @slot('thead')
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            @endslot
            @slot('tbody')
                <tbody>
                @if(count($produtos) > 0)
                @foreach($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->estoque }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ Categoria::find($produto->categoria_id)->nome }}</td>
                        <td>
                            <a href="">Editar</a>
                            <a href="">Excluir</a>
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="6" align="center">Sem Produtos</td>
                    </tr>
                @endif
                </tbody>
            @endslot
        @endcomponent
    </div>
    <div class="card-footer">
        <a href="{{ route('produto.create') }}" class="btn btn-primary btn-md" role="button">Adicionar Produto</a>
    </div>
</div>
@endsection