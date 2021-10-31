<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'id' => 1,  
                'comentario' => 'Muy buen libro, vuelve a abrir la mente como cuando éramos niños',
                'calificacion' => 5,
                'user_id' => 1,
                'libro_id' => 1
            ],
        ]);
    }
}
