<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisDeOrigenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paisDeOrigens')->insert([
            ['id' => 1, 'nombre' => 'Alemania'],
            ['id' => 2, 'nombre' => 'Rusia'],
            ['id' => 3, 'nombre' => 'Estados Unidos'],
            ['id' => 4, 'nombre' => 'España'],
            ['id' => 5, 'nombre' => 'México'],
            ['id' => 6, 'nombre' => 'Costa Rica'],
            ['id' => 7, 'nombre' => 'Colombia'],
        ]);
    }
}
