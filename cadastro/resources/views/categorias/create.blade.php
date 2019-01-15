@extends('layout.app', ["current" => "categorias"])
@section('titulo', 'Criar Categoria')

@section('conteudo')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('categoria.store') }}" method="post">
            <div class="form-group">
                {{ csrf_field() }}
                <div class="col-xs-12 col-md-12">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-md-3">
                        <button class="btn btn-primary">Cadastrar</button>
                        <button class="btn btn-danger" type="cancel">Cancelar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
let btnCancel = document.querySelector('.btn-danger');
let rota = '/categorias';
btnCancel.onclick = function(e) {
    e.preventDefault();
    window.location.href = rota;
} 
</script>
@endsection