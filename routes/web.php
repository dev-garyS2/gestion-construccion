<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TareaController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('proyectos', ProyectoController::class);
Route::resource('tareas', TareaController::class);
