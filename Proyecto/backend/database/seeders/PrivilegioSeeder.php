<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivilegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privilegios')->insert([
            ['id' => 1, 'nombre' => 'Agregar libro' , 'descripcion' => 'Agregar un nuevo libro al sistema'],
            ['id' => 2, 'nombre' => 'Agregar review' , 'descripcion' => 'Dejar un comentario y calificación a uno o varios libros'],
            ['id' => 3, 'nombre' => 'Editar libros' , 'descripcion' => 'Cambiar las características de un libro'],
            ['id' => 4, 'nombre' => 'Eliminar libros' , 'descripcion' => 'Borrar un libro del sistema'],
            ['id' => 5, 'nombre' => 'Consultar usuarios' , 'descripcion' => 'Consultar todos los usuarios del sistema'],
        ]);
    }
}
