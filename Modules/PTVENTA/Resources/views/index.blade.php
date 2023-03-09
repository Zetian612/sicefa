@extends('ptventa::layouts.master')

@section('breadcrumb')
    {{-- The breadcrumb is the tracking af the displayed view --}}
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
    <li class="breadcrumb-item active">Página principal</li>
@endsection

@section('content')
    <h1>Bienvenido grupo <strong>AdsiCodingGroup</strong></h1>

    <p>
        Esta es la vista principal del modulo PTVENTA para el proyecto Punto de Venta.
        <a href="{{ route('cefa.welcome') }}">Volver a SICEFA</a>
    </p>
@endsection

@section('scripts')
@endsection
