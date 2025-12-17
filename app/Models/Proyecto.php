<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable = ['nombre','ubicacion','cliente_id','tipo_id'];
    public $timestamps = false;
    
    public function tareas() {
        return $this->hasMany(Tarea::class);
    }

    public function tipo()
    {
        return $this->belongsTo(TipoProyecto::class, 'tipo_id');
    }
}
