<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tareas';
    protected $fillable = ['proyecto_id','nombre','fecha_inicio','fecha_fin','estado_id'];
    public $timestamps = false;
    
    public function proyecto() {
        return $this->belongsTo(Proyecto::class);
    }

    public function estado()
    {
        return $this->belongsTo(EstadoTarea::class, 'estado_id');
    }
}
