<div>
@extends('layouts.app')

@section('content')
<h1 class="mb-4">Editar Tarea</h1>

<form action="{{ route('tareas.update', $tarea) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Proyecto</label>
        <select name="proyecto_id" class="form-select" required>
            @foreach($proyectos as $p)
                <option value="{{ $p->id }}"
                    {{ $tarea->proyecto_id == $p->id ? 'selected' : '' }}>
                    {{ $p->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input
            type="text"
            name="nombre"
            class="form-control"
            value="{{ $tarea->nombre }}"
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha Inicio</label>
        <input
            type="date"
            name="fecha_inicio"
            class="form-control"
            value="{{ $tarea->fecha_inicio }}"
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha Fin</label>
        <input
            type="date"
            name="fecha_fin"
            class="form-control"
            value="{{ $tarea->fecha_fin }}"
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Estado</label>
        <select name="estado_id" class="form-select" required>
            @foreach($estados as $e)
                <option value="{{ $e->id }}"
                    {{ $tarea->estado_id == $e->id ? 'selected' : '' }}>
                    {{ $e->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('tareas.index') }}" class="btn btn-secondary">
        Cancelar
    </a>
</form>
@endsection

</div>
