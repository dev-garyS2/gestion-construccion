<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Models\Proyecto;
use App\Models\EstadoTarea;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::with('proyecto')->get();
        return view('tareas.index', compact('tareas'));
    }

    public function create()
    {
        $proyectos = Proyecto::all();
        $estados = EstadoTarea::all();
        return view('tareas.create', compact('proyectos','estados'));
    }

    public function store(Request $request)
    {
        Tarea::create($request->all());
        return redirect()->route('tareas.index');
    }

    public function edit(Tarea $tarea)
    {
        $proyectos = Proyecto::all();
        $estados = EstadoTarea::all();
        return view('tareas.edit', compact('tarea','proyectos','estados'));
    }

    public function update(Request $request, Tarea $tarea)
    {
        $tarea->update($request->all());
        return redirect()->route('tareas.index');
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tareas.index');
    }
}
