@extends('layout.app')

@section('content')
<div class="container">
    <h1>Editar Subtema</h1>
    <form action="{{ route('subtemas.update', $subtema->noDeSubtema) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="noDeSubtema" class="form-label">No. de Subtema</label>
            <input type="text" class="form-control" id="noDeSubtema" name="noDeSubtema" value="{{ $subtema->noDeSubtema }}" readonly>
        </div>
        <div class="mb-3">
            <label for="noDeUnidad" class="form-label">No. de Unidad</label>
            <input type="text" class="form-control" id="noDeUnidad" name="noDeUnidad" value="{{ $subtema->noDeUnidad }}" required>
        </div>
        <div class="mb-3">
            <label for="materia" class="form-label">Materia</label>
            <input type="text" class="form-control" id="materia" name="materia" value="{{ $subtema->materia }}" required>
        </div>
        <div class="mb-3">
            <label for="nombreSubtema" class="form-label">Nombre del Subtema</label>
            <input type="text" class="form-control" id="nombreSubtema" name="nombreSubtema" value="{{ $subtema->nombreSubtema }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
