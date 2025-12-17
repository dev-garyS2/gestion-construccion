<div>
@extends('layouts.app')

@section('content')
<h1 class="mb-4">Nueva Tarea</h1>

<form action="{{ route('tareas.store') }}" method="POST">
@csrf

<div class="mb-3">
    <label class="form-label">Proyecto</label>
    <select name="proyecto_id" class="form-select" required>
        <option value="">Seleccione un proyecto</option>
        @foreach($proyectos as $p)
            <option value="{{ $p->id }}">{{ $p->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Fecha Inicio</label>
    <input type="date" name="fecha_inicio" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Fecha Fin</label>
    <input type="date" name="fecha_fin" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Estado</label>
    <select name="estado_id" class="form-select" required>
        <option value="">Seleccione un estado</option>
        @foreach($estados as $e)
            <option value="{{ $e->id }}">{{ $e->nombre }}</option>
        @endforeach
    </select>
</div>

<button class="btn btn-success">Guardar</button>
<a href="{{ route('tareas.index') }}" class="btn btn-secondary">Volver</a>
</form>
@endsection

</div>
