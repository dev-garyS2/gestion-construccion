<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyectoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('proyectos')->insert([
            ['nombre' => 'Casa Familiar López', 'ubicacion' => 'La Paz', 'cliente_id' => 1001, 'tipo_id' => 1],
            ['nombre' => 'Centro Comercial Andino', 'ubicacion' => 'Cochabamba', 'cliente_id' => 1002, 'tipo_id' => 2],
            ['nombre' => 'Planta Industrial Norte', 'ubicacion' => 'Santa Cruz', 'cliente_id' => 1003, 'tipo_id' => 3],
        ]);
    }
}

