@extends('layouts.app')

@section('title', 'Confirmación de Sugerencia')

@section('content')
<div class="container mt-4">
    <div class="alert alert-success">
        <h4 class="alert-heading">¡Sugerencia enviada exitosamente!</h4>
        <p>Gracias por compartir tu sugerencia. Hemos recibido tu mensaje y lo revisaremos en breve.</p>
        <hr>
        <p class="mb-0">Si deseas enviar otra sugerencia o regresar al inicio, puedes hacerlo usando los siguientes botones:</p>
    </div>

    <div class="d-flex justify-content-center gap-3">
    <a href="{{ route('sugerencias.create') }}" class="btn btn-primary">Enviar otra sugerencia</a>
    <a href="{{ route('sugerencias.index') }}" class="btn btn-secondary">Regresar al inicio</a>
@endsection
