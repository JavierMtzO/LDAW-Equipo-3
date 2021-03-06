<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolPrivilegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol_privilegios')->insert([
            ['rol_id' => 1, 'privilegio_id' => 1],
            ['rol_id' => 1, 'privilegio_id' => 2],
            ['rol_id' => 1, 'privilegio_id' => 3],
            ['rol_id' => 1, 'privilegio_id' => 4],
            ['rol_id' => 1, 'privilegio_id' => 5],
            ['rol_id' => 2, 'privilegio_id' => 1],
            ['rol_id' => 2, 'privilegio_id' => 2],
        ]);
    }
}
