@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/estiloIniciarSesion.css') }}">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 d-flex justify-content-center">
            <div class="card p-4">
                
                <div class="card-body text-center">
                    <img src="{{ asset('img/Logo.png') }}" alt="Logo SignVerse" class="logo-img mb-3">
                    <div class="card-header text-center mb-3">{{ __('Registrarse') }}</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
    <select id="cod_tipo_doc_fk" name="cod_tipo_doc_fk" class="form-control @error('cod_tipo_doc_fk') is-invalid @enderror" required>
        <option value="" disabled {{ old('cod_tipo_doc_fk') === null ? 'selected' : '' }}>Seleccionar Tipo de Documento</option>
        @foreach($tipos_documento as $tipo_documento)
            <option value="{{ $tipo_documento->id }}" {{ old('cod_tipo_doc_fk') == $tipo_documento->id ? 'selected' : '' }}>
                {{ $tipo_documento->descripcion }}
            </option>
        @endforeach
    </select>
    @error('cod_tipo_doc_fk') 
        <span class="invalid-feedback d-block text-start">
            <strong>{{ $message }}</strong>
        </span> 
    @enderror
</div>

                        <div class="mb-3">
                            <input id="num_id" type="text" name="num_id" class="form-control @error('num_id') is-invalid @enderror" placeholder="Número de Identificación" value="{{ old('num_id') }}" required>
                            @error('num_id') <span class="invalid-feedback d-block text-start"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-3">
                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" value="{{ old('name') }}" required>
                            @error('name') <span class="invalid-feedback d-block text-start"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-3">
                            <input id="name_2" type="text" name="name_2" class="form-control @error('name_2') is-invalid @enderror" placeholder="Segundo Nombre (Opcional)" value="{{ old('name_2') }}">
                            @error('name_2') <span class="invalid-feedback d-block text-start"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-3">
                            <input id="lastname" type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Apellido" value="{{ old('lastname') }}" required>
                            @error('lastname') <span class="invalid-feedback d-block text-start"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-3">
                            <input id="lastname_2" type="text" name="lastname_2" class="form-control @error('lastname_2') is-invalid @enderror" placeholder="Segundo Apellido (Opcional)" value="{{ old('lastname_2') }}">
                            @error('lastname_2') <span class="invalid-feedback d-block text-start"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-3">
    <select id="discapacidad_aud" name="discapacidad_aud" class="form-control @error('discapacidad_aud') is-invalid @enderror" required>
        <option value="" disabled {{ old('discapacidad_aud') === null ? 'selected' : '' }}>¿Presenta alguna discapacidad auditiva?</option>
        <option value="1" {{ old('discapacidad_aud') == 1 ? 'selected' : '' }}>Sí</option>
        <option value="0" {{ old('discapacidad_aud') == 0 ? 'selected' : '' }}>No</option>
    </select>
    @error('discapacidad_aud') 
        <span class="invalid-feedback d-block text-start">
            <strong>{{ $message }}</strong>
        </span> 
    @enderror
</div>
                        <div class="mb-3">
                            <input id="fecha_naci" type="date" name="fecha_naci" class="form-control @error('fecha_naci') is-invalid @enderror" value="{{ old('fecha_naci') }}" required>
                            @error('fecha_naci') <span class="invalid-feedback d-block text-start"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-3">
    <select id="cod_genero_fk" name="cod_genero_fk" class="form-control @error('cod_genero_fk') is-invalid @enderror" required>
        <option value="" disabled {{ old('cod_genero_fk') === null ? 'selected' : '' }}>Seleccione Género</option>
        @foreach($generos as $genero)
            <option value="{{ $genero->cod_genero }}" {{ old('cod_genero_fk') == $genero->cod_genero ? 'selected' : '' }}>
                {{ $genero->descripcion }}
            </option>
        @endforeach
    </select>
    @error('cod_genero_fk') 
        <span class="invalid-feedback d-block text-start">
            <strong>{{ $message }}</strong>
        </span> 
    @enderror
</div>

                        <div class="mb-3">
    <select id="ciudad_id" name="ciudad_id" class="form-control @error('ciudad_id') is-invalid @enderror" required>
        <option value="" disabled {{ old('ciudad_id') === null ? 'selected' : '' }}>Seleccionar Ciudad</option>
        @foreach($ciudades as $ciudad)
            <option value="{{ $ciudad->id }}" {{ old('ciudad_id') == $ciudad->id ? 'selected' : '' }}>
                {{ $ciudad->descripcion }}
            </option>
        @endforeach
    </select>
    @error('ciudad_id') 
        <span class="invalid-feedback d-block text-start">
            <strong>{{ $message }}</strong>
        </span> 
    @enderror
</div>

<div class="mb-3">
    <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo Electrónico" value="{{ old('email') }}" required>
    @error('email') <span class="invalid-feedback d-block text-start"><strong>{{ $message }}</strong></span> @enderror
</div>

<div class="mb-3 position-relative">
    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" required>
    <span class="toggle-password" onclick="togglePassword('password')" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
        👁️
    </span>
    @error('password') <span class="invalid-feedback d-block text-start"><strong>{{ $message }}</strong></span> @enderror
</div>

<div class="mb-3 position-relative">
    <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Contraseña" required>
    <span class="toggle-password" onclick="togglePassword('password-confirm')" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
        👁️
    </span>
</div>

<script src="{{ asset('js/jsVerPassword.js') }}"></script>


                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary w-100">
                                {{ __('Registrarme') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
