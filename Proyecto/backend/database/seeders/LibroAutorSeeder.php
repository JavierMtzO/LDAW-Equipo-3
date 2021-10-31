<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroAutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro_autors')->insert([
            [
                'libro_id' => 1,
                'autor_id' => 1
            ],
        ]);
    }
}
