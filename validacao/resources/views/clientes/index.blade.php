@extends('layout.app')
@section('titulo', 'Clientes')

@section('body')
<main role="main">
    <div class="row">
        <div class="container col-md-8 col-offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <h5 class="card-title float-left">Lista de Clientes</h5>
                    <a href="{{ route('cliente.create') }}" class="btn btn-secondary float-right" role="button">Novo Cliente</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Endereço</th>
                                <th>Email</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->idade }}</td>
                                    <td>{{ $cliente->endereco }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>
                                        <a href="{{ route('cliente.delete',[$cliente->id]) }}" class="btn btn-danger" role="button"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection