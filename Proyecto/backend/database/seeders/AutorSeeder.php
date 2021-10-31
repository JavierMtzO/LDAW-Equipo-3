<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autors')->insert([
            ['id' => 1,'nombre' => 'Michael', 'apellidos' => 'Ende', 'paisDeOrigen_id' => 1],
        ]);
    }
}
