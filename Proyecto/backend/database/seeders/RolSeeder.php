<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            ['id' => 1,'nombre' => 'administrador' , 'descripcion' => 'Administrador del sistema Meet My Books'],
            ['id' => 2,'nombre' => 'cliente' , 'descripcion' => 'Cliente de la plataforma'],
        ]);
    }
}
