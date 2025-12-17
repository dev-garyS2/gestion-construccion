<div>
    @extends('layouts.app')

    @section('content')
        <h1 class="mb-3">Proyectos</h1>

        <a href="{{ route('proyectos.create') }}" class="btn btn-primary mb-3">
            Nuevo Proyecto
        </a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Cliente</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proyectos as $p)
                    <tr>
                        <td>{{ $p->nombre }}</td>
                        <td>{{ $p->ubicacion }}</td>
                        <td>{{ $p->cliente_id }}</td>
                        <td>{{ $p->tipo->nombre ?? 'Sin tipo' }}</td>
                        <td>
                            <a href="{{ route('proyectos.edit', $p) }}" class="btn btn-sm btn-warning">
                                Editar
                            </a>

                            <form action="{{ route('proyectos.destroy', $p) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection

</div>
