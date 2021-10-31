<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro_categorias')->insert([
            [
                'libro_id' => 1,
                'categoria_id' => 3
            ],
        ]);
    }
}
