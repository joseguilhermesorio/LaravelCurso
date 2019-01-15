@extends('layout.app')
@section('titulo', 'Novo Cliente')

@section('body')
<main role="main">
    <div class="row">
        <div class="container col-md-8 col-offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <h5 class="card-title float-left">Cadastro de Clientes</h5>
                    <a href="javascript: history.back();" class="btn btn-secondary float-right" role="button">Voltar</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('cliente.store') }}" method="post" class="needs-validation">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="nome">Nome do Cliente:</label>
                                    <input type="text" name="nome" id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" value="{{ old('nome') }}">
                                    @if($errors->has('nome'))
                                        <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <label for="idade">Idade do Cliente:</label>
                                    <input type="number" name="idade" id="idade" class="form-control {{ $errors->has('idade') ? 'is-invalid' : '' }}" value="{{ old('idade') }}">
                                    @if($errors->has('idade'))
                                        <div class="invalid-feedback">{{ $errors->first('idade') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="endereco">Endereço:</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" value="{{ old('endereco') }}">
                                    @if($errors->has('endereco'))
                                        <div class="invalid-feedback">{{ $errors->first('endereco') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" role="button">Cadastrar</button>
                            <a href="javascript: history.back();" class="btn btn-danger" role="button">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection