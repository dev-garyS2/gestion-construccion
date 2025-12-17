<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTareaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('estados_tarea')->insert([
            ['nombre' => 'Pendiente'],
            ['nombre' => 'En Progreso'],
            ['nombre' => 'Finalizada'],
        ]);
    }
}

