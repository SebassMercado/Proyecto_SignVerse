@extends('layouts.app')

@section('title', 'Nueva Sugerencia')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Nueva Sugerencia</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sugerencias.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ old('titulo') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" class="form-control" rows="5" required>{{ old('mensaje') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Crear Sugerencia</button>
        <a href="{{ route('sugerencias.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

