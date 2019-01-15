<?php
use App\Categoria;
use App\Produto;

Route::get('/categorias', function () {
    $cat = Categoria::all();
    if(count($cat) === 0)
        echo "<h4>Você não possui nenhuma categoria cadastrada!</h4>";
    else
        foreach($cat as $c){
            echo "<p>Categoria: $c->nome</p>";
        }
}); 

Route::get('/produtos', function() {
    $prod = Produto::all();
    if(count($prod) === 0)
        echo "<h4>Você não tem produtos cadastrados!</h4>";
    else 
        foreach($prod as $p) {
            echo "<p>Nome: $p->nome, Preço: $p->preco, Estoque: $p->estoque, Categoria: ".$p->categoria->nome ."</p>";
        }
});

Route::get('/categoriaprodutos', function() {
    $cats = Categoria::all();
    if(count($cats) == 0) 
        echo "Você não tem categorias cadastradas!";
    else
        foreach($cats as $c) {
            echo "<p>Categoria: $c->nome</p>";
            $produtos = $c->produtos;
            if(count($produtos) > 0)
                echo "<ul>";
                    foreach($produtos as $p) {
                        echo "<li>$p->nome</li>";
                    }
                echo "</ul>";
        }
});


Route::get('/categoriaprodutos/json', function() {
    $categorias = Categoria::with(['produtos'])->get();
    foreach($categorias as $cat) {
        $produtos = $cat->produtos;
            foreach($produtos as $p){
                echo "<p>Categoria: $cat->nome , Produto: ".$p->nome."</p>";
            }
    }
});

Route::get('/adicionarproduto', function() {
    $cat = Categoria::find(1);
    $p = new Produto();
    $p->nome = 'Meu novo produto';
    $p->preco = 100;
    $p->estoque = 20;
    $p->categoria()->associate($cat);
    $p->save();
    return $p->toJson();
});

Route::get('/buscacategoria/{catid}', function($catid) {
    $categoria = Categoria::with(['produtos'])->find($catid);
    $p = new Produto();
    $p->nome = "novo produto adicionado";
    $p->preco = 200;
    $p->estoque = 30;

    if(isset($categoria)) {
        $categoria->produtos()->save($p);
        
    }
    $categoria->load('produtos');
    return $categoria->toJson();
    
});