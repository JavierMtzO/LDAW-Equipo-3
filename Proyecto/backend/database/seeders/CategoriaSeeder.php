<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['id' => 1, 'nombre' => 'Científicos'],
            ['id' => 2, 'nombre' => 'Literatura y lingüísticos'],
            ['id' => 3, 'nombre' => 'De viaje'],
            ['id' => 4, 'nombre' => 'Biografías'],
            ['id' => 5, 'nombre' => 'Libro de texto'],
            ['id' => 6, 'nombre' => 'De referencia o consulta'],
            ['id' => 7, 'nombre' => 'Monografías'],
        ]);
    }
}