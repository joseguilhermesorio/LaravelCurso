<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Paginação</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="container">
            <div class="card text-center">
                <div class="card-header">
                    Tabela de Clientes
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <table class="table table-hover" id="tabelaClientes">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Sobrenome</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <nav id="paginator">

                        <ul class="pagination">
                            
                        </ul>

                    </nav>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript">

            

            function montarPaginator(data) {
                $('#paginator > .pagination li').remove();
                $('#paginator > .pagination').append(getAnterior(data));
                var n = 10;
                if(data.current_page - n/2 <= 1)
                    var inicio = 1;
                else if(data.current_page + n/2 > data.last_page)
                    inicio = data.last_page - n + 1; 
                else
                    inicio = data.current_page - n/2;
                
                var fim = inicio + n - 1;
                for(var i = inicio; i <= fim; i++) {
                    var s = getItem(data, i);
                    $('#paginator > .pagination').append(s)
                }
                
            }

            function getProximo(data) {
                if(data.current_page == data.last_page)
                    var s = `<li class="page-item disabled">`;
                else 
                    s = `<li class="page-item">`;
                s += `<a class="page-link" proximo="${data.current_page}" href="javascript:;">Próximo</a>`;
                return s;
            }

            function getAnterior(data) {
                if(data.current_page == 1)
                    var s = `<li class="page-item disabled">`;
                else
                    s = `<li class="page-item">`;
                s+= `<a class="page-link" anterior="${data.current_page}" href="javascript:;">Anterior</a>`;
                return s;

            }

            function getItem(data, i) {
                if(i == data.current_page)
                    var s = `<li class="page-item active">`;
                else
                    s = `<li class="page-item">`
                s+= `<a class="page-link" pagina="${i}" href="javascript:;">${i}</a>`;
                return s;
            }

            function montarTabela(data) {
                $('#tabelaClientes > tbody > tr').remove();
                for(var i = 0; i < data.data.length; i++) {
                   var s = montarLinha(data.data[i]);
                }
            }

            function montarLinha(data) {
                var tabela = document.getElementById('tabelaClientes');
                var linha = tabela.insertAdjacentHTML('beforeend', `
                    <tr>
                        <td>${data.id}</td>
                        <td>${data.nome}</td>
                        <td>${data.sobrenome}</td>
                        <td>${data.email}</td>
                    </tr>
                `);
                return linha;
            }

           function carregarClientes(page) {
                $.get('/json', {page: page}, function(data){
                    montarTabela(data);
                    montarPaginator(data);
                    
                    var cardTitle = $('.card-title')[0];
                    cardTitle.innerText = `Exibindo clientes ${data.from} a ${data.to} de ${data.total}`;

                    $('#paginator > .pagination').append(getProximo(data));
                    var links = document.querySelectorAll('#paginator .pagination li a');
                    links.forEach(link => {
                        var pagina = link.getAttribute('pagina');
                        link.addEventListener('click', function(e) {
                            e.preventDefault();
                            carregarClientes(pagina);
                        })
                    })

                    var proximo = $('#paginator .pagination li a[proximo]');
                    $(proximo).click( function(e){
                        e.preventDefault();
                        var valorProximo = $(this).attr('proximo');
                        carregarClientes(parseInt(valorProximo) + 1);
                    });

                    var anterior = $('#paginator .pagination li a[anterior]');
                    $(anterior).click( function(e){
                        e.preventDefault();
                        var valoAnterior = $(this).attr('anterior');
                        carregarClientes(parseInt(valoAnterior) - 1);
                    });
                });
           }

           $(function() {
                carregarClientes(1);
           });

        </script>
    </body>
</html>
