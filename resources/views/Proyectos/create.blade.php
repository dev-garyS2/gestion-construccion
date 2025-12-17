<div>
    @extends('layouts.app')

@section('content')
<h1>Nuevo Proyecto</h1>

<form action="{{ route('proyectos.store') }}" method="POST">
@csrf

<div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Ubicación</label>
    <input type="text" name="ubicacion" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Cliente ID</label>
    <input type="number" name="cliente_id" class="form-control">
</div>

<div class="mb-3">
    <label class="form-label">Tipo Proyecto ID</label>
    <input type="number" name="tipo_id" class="form-control">
</div>

<button class="btn btn-success">Guardar</button>
<a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver</a>
</form>
@endsection

</div>