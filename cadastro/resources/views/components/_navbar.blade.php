<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('index') }}">CadProd</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item @if($current === 'index') active @else '' @endif ">
          <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item @if($current === 'produtos') active @else '' @endif">
          <a class="nav-link" href="{{ route('produto.index') }}">Produtos</a>
        </li>
        <li class="nav-item @if($current === 'categorias') active @else '' @endif">
            <a class="nav-link" href="{{ route('categoria.index') }}">Categorias</a>
        </li>
      </ul>
    </div>
  </nav>