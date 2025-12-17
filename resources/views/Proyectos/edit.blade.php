<div>
   @extends('layouts.app')

@section('content')
<h1 class="mb-4">Editar Proyecto</h1>

<form action="{{ route('proyectos.update', $proyecto) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input
            type="text"
            name="nombre"
            class="form-control"
            value="{{ $proyecto->nombre }}"
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Ubicación</label>
        <input
            type="text"
            name="ubicacion"
            class="form-control"
            value="{{ $proyecto->ubicacion }}"
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Cliente ID</label>
        <input
            type="number"
            name="cliente_id"
            class="form-control"
            value="{{ $proyecto->cliente_id }}"
            required
        >
    </div>

    <div class="mb-3">
        <label class="form-label">Tipo de Proyecto ID</label>
        <input
            type="number"
            name="tipo_id"
            class="form-control"
            value="{{ $proyecto->tipo_id }}"
            required
        >
    </div>

    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">
        Cancelar
    </a>
</form>
@endsection

</div>
