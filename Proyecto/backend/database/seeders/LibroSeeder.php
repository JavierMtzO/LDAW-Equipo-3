<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->insert([
            [
                'id' => 1,  
                'nombre' => 'Historia Interminable',
                'resumen' => 'Lorem Ipsum...',
                'imagen' => 'historia_interminable.jpeg',
                'genero_id' => 1
            ],
        ]);
    }
}
