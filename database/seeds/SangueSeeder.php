<?php

use Illuminate\Database\Seeder;

class SangueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sangues')->insert(['tipo' => 'A+', 'recebe' => 'x', 'doa' => 'y']);
        DB::table('sangues')->insert(['tipo' => 'A-', 'recebe' => 'x', 'doa' => 'y']);
        DB::table('sangues')->insert(['tipo' => 'B+', 'recebe' => 'x', 'doa' => 'y']);
        DB::table('sangues')->insert(['tipo' => 'B-', 'recebe' => 'x', 'doa' => 'y']);
        DB::table('sangues')->insert(['tipo' => 'AB+', 'recebe' => 'x', 'doa' => 'y']);
        DB::table('sangues')->insert(['tipo' => 'AB-', 'recebe' => 'x', 'doa' => 'y']);
        DB::table('sangues')->insert(['tipo' => 'O+', 'recebe' => 'x', 'doa' => 'y']);
        DB::table('sangues')->insert(['tipo' => 'O-', 'recebe' => 'x', 'doa' => 'y']);

    }
}
