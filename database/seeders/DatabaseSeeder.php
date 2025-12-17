<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeders de datos paramétricos y de ejemplo
        $this->call([
            TiposProyectoSeeder::class,
            EstadosTareaSeeder::class,
            ProyectoSeeder::class,
            TareaSeeder::class,
        ]);
    }
}

