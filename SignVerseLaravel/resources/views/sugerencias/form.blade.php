@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/estiloIniciarSesion.css') }}">
</head>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-5" style="max-width: 500px; width: 100%;">
        <div class="card-body text-center">
            <img src="{{ asset('img/buzon.png') }}" alt="Logo buzon" class="logo-img mb-4" style="width: 150px;">
            <h3 class="mb-4">{{ isset($sugerencia) ? 'Editar Sugerencia' : 'Crear Nueva Sugerencia' }}</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ isset($sugerencia) ? route('sugerencias.update', $sugerencia->id) : route('sugerencias.store') }}" method="POST">
                @csrf
                @if(isset($sugerencia))
                    @method('PUT')
                @endif

                <div class="mb-4">
                    <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $sugerencia->titulo ?? '') }}" required placeholder="Título" style="border-radius: 25px;">
                </div>

                <div class="mb-4">
                    <textarea name="mensaje" class="form-control" rows="5" required placeholder="Mensaje" style="border-radius: 25px;">{{ old('mensaje', $sugerencia->mensaje ?? '') }}</textarea>
                </div>

                <div class="mb-4">
                    <select name="estado" class="form-control" required style="border-radius: 25px;">
                        <option value="" disabled {{ old('estado', $sugerencia->estado ?? '') == '' ? 'selected' : '' }}>Estado</option>
                        <option value="pendiente" {{ old('estado', $sugerencia->estado ?? '') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="respondida" {{ old('estado', $sugerencia->estado ?? '') == 'respondida' ? 'selected' : '' }}>Respondida</option>
                    </select>
                </div>

                <div class="d-flex justify-content-center gap-4">
                    <button type="submit" class="btn btn-primary w-100" style="border-radius: 25px;">Guardar</button>
                </div>

                <div class="mt-3 text-center">
    <a href="{{ route('home') }}" class="btn btn-outline-secondary w-100" 
       style="border-radius: 25px; background-color: #6c757d; color: white; border-color: #6c757d;"
       onmouseover="this.style.backgroundColor='#5a6268'; this.style.borderColor='#5a6268';"
       onmouseout="this.style.backgroundColor='#6c757d'; this.style.borderColor='#6c757d';">
       Cancelar
    </a>
</div>            
</form>
        </div>
    </div>
</div>
@endsection
