<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>@yield('titulo')</title>
</head>
<body>
    
    @component('components._navbar', ["current" => $current])
    @endcomponent
    <div class="container">
        <main role="main">
            @hasSection('conteudo')
                @yield('conteudo')
            @endif
        </main>
    </div>

  <!-- JS -->
  <script src="{{ asset('js/app.js') }}"></script>  
</body>
</html>