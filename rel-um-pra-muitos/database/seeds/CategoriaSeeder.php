<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['nome' => 'Roupas', 'created_at' => now()]);
        DB::table('categorias')->insert(['nome' => 'Eletrônicos','created_at' => now()]);
        DB::table('categorias')->insert(['nome' => 'Relógios','created_at' => now()]);
        DB::table('categorias')->insert(['nome' => 'Informática','created_at' => now()]);
        DB::table('categorias')->insert(['nome' => 'Carros','created_at' => now()]);
    }
}
