<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GeneroSeeder::class,
            CategoriaSeeder::class,
            RolSeeder::class,
            PrivilegioSeeder::class,
            PaisDeOrigenSeeder::class,
            AutorSeeder::class,
            UserSeeder::class,
            LibroSeeder::class,
            ReviewSeeder::class,
            LibroCategoriaSeeder::class,
            LibroAutorSeeder::class,
            FavoritoSeeder::class,
            RolPrivilegioSeeder::class,
        ]);
    }
}
