@extends('layout.app', ["current" => "index"])
@section('titulo', 'Cadastro de Produtos')

@section('conteudo')
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card-text">
                            Aqui você cadastra todos os seus produtos!
                            Só não se esqueca de cadastrar previamente as categorias.
                        </p>
                        <a href="{{ route('produto.index') }}" class="btn btn-primary" type="button">Cadastre seus produtos</a>
                    </div>
                </div><!-- card -->
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categorias</h5>
                        <p class="card-text">
                            Cadastre as categorias dos seus produtos!
                        </p>
                        <a href="{{ route('categoria.index') }}" class="btn btn-primary" type="button">Cadastre suas categorias</a>
                    </div>
                </div><!-- card -->
            </div><!-- card-deck -->
        </div>
    </div>
@endsection