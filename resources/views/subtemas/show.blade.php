@extends('layout.app')

@section('content')
<div class="container">
    <h1>Detalles del Subtema</h1>
    <ul>
        <li><strong>No. de Subtema:</strong> {{ $subtema->noDeSubtema }}</li>
        <li><strong>No. de Unidad:</strong> {{ $subtema->noDeUnidad }}</li>
        <li><strong>Materia:</strong> {{ $subtema->materia }}</li>
        <li><strong>Nombre del Subtema:</strong> {{ $subtema->nombreSubtema }}</li>
    </ul>
    <a href="{{ route('subtemas.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
