<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposProyectoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tipos_proyecto')->insert([
            ['nombre' => 'Residencial'],
            ['nombre' => 'Comercial'],
            ['nombre' => 'Industrial'],
        ]);
    }
}
