<?php

use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert([
            'rua' => 'rua 01', 
            'bairro' => 'bairro 01', 
            'numero' => '001', 
            'cidade' => 'Maceió', 
            'uf' => 'AL', 
            'pais' => 'Brasil', 
            'cep' => '57035500', 
            'complemento' => 'Rua das casas 01'
        ]);
        
        DB::table('enderecos')->insert([
            'rua' => 'rua 02', 
            'bairro' => 'bairro 02', 
            'numero' => '002', 
            'cidade' => 'Maceió', 
            'uf' => 'AL', 
            'pais' => 'Brasil', 
            'cep' => '57045800', 
            'complemento' => 'Rua dos prédios 02'
        ]);


       
    }
}
