<?php

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome'          => 'Camiseta Polo',
            'preco'         => 200,
            'estoque'       => 10,
            'categoria_id'  => 1,
            'created_at' => now()
        ]);
        DB::table('produtos')->insert([
            'nome'          => 'Relógio de Pulso Adidas',
            'preco'         => 250,
            'estoque'       => 50,
            'categoria_id'  => 3,
            'created_at' => now()
        ]);
        DB::table('produtos')->insert([
            'nome'          => 'Notebook Samsung i7 16GB',
            'preco'         => 3500,
            'estoque'       => 10,
            'categoria_id'  => 4,
            'created_at' => now()
        ]);
        DB::table('produtos')->insert([
            'nome'          => 'Palio modelo 2019',
            'preco'         => 15600,
            'estoque'       => 3,
            'categoria_id'  => 5,
            'created_at' => now()
        ]);
    }
}
