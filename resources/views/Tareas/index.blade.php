<div>
@extends('layouts.app')

@section('content')
<h1 class="mb-3">Tareas</h1>

{{-- Mensajes de éxito --}}
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

{{-- Mensajes de error --}}
@if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<a href="{{ route('tareas.create') }}" class="btn btn-primary mb-3">
    Nueva Tarea
</a>

<table class="table table-bordered table-striped">
<thead>
<tr>
    <th>Proyecto</th>
    <th>Nombre</th>
    <th>Inicio</th>
    <th>Fin</th>
    <th>Estado</th>
    <th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach($tareas as $t)
<tr>
    <td>{{ $t->proyecto->nombre }}</td> {{-- Nombre del proyecto --}}
    <td>{{ $t->nombre }}</td>
    <td>{{ $t->fecha_inicio }}</td>
    <td>{{ $t->fecha_fin }}</td>
    <td>{{ $t->estado->nombre }}</td> {{-- Nombre del estado --}}
    <td>
        <a href="{{ route('tareas.edit',$t) }}" class="btn btn-sm btn-warning">
            Editar
        </a>

        <form action="{{ route('tareas.destroy',$t) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger" 
                    onclick="return confirm('¿Seguro que quieres eliminar esta tarea?');">
                Eliminar
            </button>
        </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
@endsection


</div>
