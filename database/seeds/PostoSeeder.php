<?php

use Illuminate\Database\Seeder;

class PostoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postos')->insert([
            'nome' => 'Hemopac', 
            'tipo' => 'x', 
            'horario' => '08:00', 
            'telefone' => '3355-6655', 
            'endereco_id' => '1'
        ]);
        
        DB::table('postos')->insert([
            'nome' => 'Uncisal', 
            'tipo' => 'y', 
            'horario' => '09:00', 
            'telefone' => '3456-7605', 
            'endereco_id' => '2'
        ]);    

    }
}
