<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('ubicacion', 150);
            $table->integer('cliente_id');
            $table->foreignId('tipo_id')->constrained('tipos_proyecto');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
