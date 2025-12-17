<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tareas')->insert([
            ['proyecto_id' => 1, 'nombre' => 'Excavación del terreno', 'fecha_inicio' => '2025-01-05', 'fecha_fin' => '2025-01-10', 'estado_id' => 3],
            ['proyecto_id' => 1, 'nombre' => 'Cimentación', 'fecha_inicio' => '2025-01-11', 'fecha_fin' => '2025-01-25', 'estado_id' => 2],
            ['proyecto_id' => 2, 'nombre' => 'Diseño estructural', 'fecha_inicio' => '2025-02-01', 'fecha_fin' => '2025-02-15', 'estado_id' => 1],
            ['proyecto_id' => 2, 'nombre' => 'Instalación eléctrica', 'fecha_inicio' => '2025-02-16', 'fecha_fin' => '2025-03-01', 'estado_id' => 1],
            ['proyecto_id' => 3, 'nombre' => 'Montaje de maquinaria', 'fecha_inicio' => '2025-01-20', 'fecha_fin' => '2025-02-10', 'estado_id' => 2],
        ]);
    }
}
