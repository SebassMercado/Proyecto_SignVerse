@extends('layouts.app')

@section('content')

<head>
    <!-- Enlace al CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/estiloIniciarSesion.css') }}">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div div style="display: flex; justify-content: center;" class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Registro de Clientes') }}</div>
                <div class="card-body">
    <img src="{{ asset('img/Logo.png') }}" alt="Logo SignVerse" class="logo-img">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
    <label for="cod_tipo_doc_fk" class="col-md-4 col-form-label text-md-start">{{ __('Tipo de Documento') }}</label>
    <div class="col-md-6">
        <select id="cod_tipo_doc_fk" class="form-control @error('cod_tipo_doc_fk') is-invalid @enderror" name="cod_tipo_doc_fk" required>
            <option value="">Seleccionar Tipo de Documento</option>
            @foreach($tipos_documento as $tipo_documento)
                <option value="{{ $tipo_documento->id }}" {{ old('cod_tipo_doc_fk') === $tipo_documento->id ? 'selected' : '' }}>
                    {{ $tipo_documento->descripcion }}
                </option>
            @endforeach
        </select>
        @error('cod_tipo_doc_fk')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="num_id" class="col-md-4 col-form-label text-md-start">{{ __('Número de Identificación') }}</label>
    <div class="col-md-6">
        <input id="num_id" type="text" class="form-control @error('num_id') is-invalid @enderror" name="num_id" value="{{ old('num_id') }}" required>
        @error('num_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Nombre') }}</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="name_2" class="col-md-4 col-form-label text-md-start">{{ __('Segundo Nombre (Opcional)') }}</label>
    <div class="col-md-6">
        <input id="name_2" type="text" class="form-control @error('name_2') is-invalid @enderror" name="name_2" value="{{ old('name_2') }}">
        @error('name_2')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="lastname" class="col-md-4 col-form-label text-md-start">{{ __('Apellido') }}</label>
    <div class="col-md-6">
        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required>
        @error('lastname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="lastname_2" class="col-md-4 col-form-label text-md-start">{{ __('Segundo Apellido (Opcional)') }}</label>
    <div class="col-md-6">
        <input id="lastname_2" type="text" class="form-control @error('lastname_2') is-invalid @enderror" name="lastname_2" value="{{ old('lastname_2') }}">
        @error('lastname_2')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="discapacidad_aud" class="col-md-4 col-form-label text-md-start">{{ __('Discapacidad Auditiva') }}</label>
    <div class="col-md-6">
        <select id="discapacidad_aud" class="form-control @error('discapacidad_aud') is-invalid @enderror" name="discapacidad_aud" required>
            <option value="1" {{ old('discapacidad_aud') == 1 ? 'selected' : '' }}>Sí</option>
            <option value="0" {{ old('discapacidad_aud') == 0 ? 'selected' : '' }}>No</option>
        </select>
        @error('discapacidad_aud')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="fecha_naci" class="col-md-4 col-form-label text-md-start">{{ __('Fecha de Nacimiento') }}</label>
    <div class="col-md-6">
        <input id="fecha_naci" type="date" class="form-control @error('fecha_naci') is-invalid @enderror" name="fecha_naci" value="{{ old('fecha_naci') }}" required>
        @error('fecha_naci')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="cod_genero_fk" class="col-md-4 col-form-label text-md-start">{{ __('Género') }}</label>
    <div class="col-md-6">
        <select id="cod_genero_fk" class="form-control @error('cod_genero_fk') is-invalid @enderror" name="cod_genero_fk" required>
            <option value="">Seleccione una opción</option>
            @foreach($generos as $genero)
                <option value="{{ $genero->cod_genero }}" {{ old('cod_genero_fk') == $genero->cod_genero ? 'selected' : '' }}>
                    {{ $genero->descripcion }}
                </option>
            @endforeach
        </select>
        @error('cod_genero_fk')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="ciudad_id" class="col-md-4 col-form-label text-md-start">{{ __('Ciudad') }}</label>
    <div class="col-md-6">
        <select id="ciudad_id" class="form-control @error('ciudad_id') is-invalid @enderror" name="ciudad_id" required>
            <option value="">Seleccionar Ciudad</option>
            @foreach($ciudades as $ciudad)
                <option value="{{ $ciudad->id }}" {{ old('ciudad_id') == $ciudad->id ? 'selected' : '' }}>
                    {{ $ciudad->descripcion }}
                </option>
            @endforeach
        </select>
        @error('ciudad_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Correo Electrónico') }}</label>
    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="password" class="col-md-4 col-form-label text-md-start">{{ __('Contraseña') }}</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-start">{{ __('Confirmar Contraseña') }}</label>
    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>

<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Registrarme') }}
        </button>
    </div>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
