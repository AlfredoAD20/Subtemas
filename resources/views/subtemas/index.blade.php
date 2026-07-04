@extends('layout.app')

@section('content')
<div class="container">
    <h1>Lista de Subtemas</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('subtemas.create') }}" class="btn btn-primary">Crear Nuevo Subtema</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>No. de Subtema</th>
                <th>No. de Unidad</th>
                <th>Materia</th>
                <th>Nombre del Subtema</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subtemas as $subtema)
                <tr>
                    <td>{{ $subtema->noDeSubtema }}</td>
                    <td>{{ $subtema->noDeUnidad }}</td>
                    <td>{{ $subtema->materia }}</td>
                    <td>{{ $subtema->nombreSubtema }}</td>
                    <td>
                        <a href="{{ route('subtemas.show', $subtema->noDeSubtema) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('subtemas.edit', $subtema->noDeSubtema) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('subtemas.destroy', $subtema->noDeSubtema) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay subtemas registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
