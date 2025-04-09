@extends('layouts.app')

@section('title', 'Enviar Sugerencia')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/estiloIniciarSesion.css') }}">
</head>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-5" style="max-width: 500px; width: 100%;">
        <div class="card-body text-center">
            <img src="{{ asset('img/buzon.png') }}" alt="Logo buzon" class="logo-img mb-4" style="width: 120px; height: auto;">
            <h3 class="mb-4 text-dark">Enviar Sugerencia</h3>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form action="{{ route('sugerencias.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}" required placeholder="Título" style="border-radius: 25px;">
                    @error('titulo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <textarea name="mensaje" id="mensaje" class="form-control" rows="5" required placeholder="Mensaje" style="border-radius: 25px;">{{ old('mensaje') }}</textarea>
                    @error('mensaje')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex justify-content-center gap-4">
                    <button type="submit" class="btn btn-primary w-100" style="border-radius: 25px;">Enviar</button>
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
