<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model
{
    protected $table = 'tipos_proyecto';
    protected $fillable = ['nombre'];
    public $timestamps = false;

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'tipo_id');
    }
}
