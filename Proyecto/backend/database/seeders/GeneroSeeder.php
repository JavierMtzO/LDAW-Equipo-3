<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("generos")->insert([
            ['id' => 1, 'nombre' => 'Aventuras'],
            ['id' => 2, 'nombre' => 'Ciencia ficción'],
            ['id' => 3, 'nombre' => 'Cuentos de hadas'],
            ['id' => 4, 'nombre' => 'Gótica'],
            ['id' => 5, 'nombre' => 'Policíaca'],
            ['id' => 6, 'nombre' => 'Paranormal'],
            ['id' => 7, 'nombre' => 'Distópica'],
            ['id' => 8, 'nombre' => 'Fantástica'],
        ]);
    }
}


