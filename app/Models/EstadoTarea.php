<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoTarea extends Model
{
    protected $table = 'estados_tarea';
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
