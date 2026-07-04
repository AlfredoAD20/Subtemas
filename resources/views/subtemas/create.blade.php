@extends('layout.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Subtema</h1>
    <form action="{{ route('subtemas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="noDeSubtema" class="form-label">No. de Subtema</label>
            <input type="text" class="form-control" id="noDeSubtema" name="noDeSubtema" required>
        </div>
        <div class="mb-3">
            <label for="noDeUnidad" class="form-label">No. de Unidad</label>
            <input type="text" class="form-control" id="noDeUnidad" name="noDeUnidad" required>
        </div>
        <div class="mb-3">
            <label for="materia" class="form-label">Materia</label>
            <input type="text" class="form-control" id="materia" name="materia" required>
        </div>
        <div class="mb-3">
            <label for="nombreSubtema" class="form-label">Nombre del Subtema</label>
            <input type="text" class="form-control" id="nombreSubtema" name="nombreSubtema" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
