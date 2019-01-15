<?php

use Illuminate\Database\Seeder;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert([
        	'nome'				=> 'Sistema de alocacao de recursos',
        	'estimativa_horas'	=> 200
        ]);

        DB::table('projetos')->insert([
        	'nome'				=> 'Sistema de Estoque',
        	'estimativa_horas'	=> 150
        ]);

        DB::table('projetos')->insert([
        	'nome'				=> 'Sistema para Postos de Gasolina',
        	'estimativa_horas'	=> 1000
        ]);
    }
}
