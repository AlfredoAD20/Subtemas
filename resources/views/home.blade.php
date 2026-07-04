@extends('layout.app')

@section('title', 'Página de Inicio')

@section('content')
    <h1>Bienvenido a mi Aplicación</h1>
    <p>Esta es la página de inicio de subtemas.</p>

    <a href="{{ route('subtemas.index') }}" class="btn btn-primary mt-3">Ver lista de Subtemas</a>
@endsection