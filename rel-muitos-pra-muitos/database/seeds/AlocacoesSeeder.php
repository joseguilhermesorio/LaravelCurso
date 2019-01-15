<?php

use Illuminate\Database\Seeder;

class AlocacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alocacoes')->insert([
        	'desenvolvedor_id'		=> 1,
        	'projeto_id'			=> 1,
        	'horas_semanais'		=> 88
        ]);

        DB::table('alocacoes')->insert([
        	'desenvolvedor_id'		=> 2,
        	'projeto_id'			=> 2,
        	'horas_semanais'		=> 34
        ]);

        DB::table('alocacoes')->insert([
        	'desenvolvedor_id'		=> 3,
        	'projeto_id'			=> 2,
        	'horas_semanais'		=> 88
        ]);

        DB::table('alocacoes')->insert([
        	'desenvolvedor_id'		=> 3,
        	'projeto_id'			=> 1,
        	'horas_semanais'		=> 100
        ]);
    }
}
