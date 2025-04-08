@extends('layouts.app')

@section('content')
<head>
    <!-- Enlace al CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/estiloContraseña.css') }}">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div style="display: flex; justify-content: center;" class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <!-- Imagen del logo -->
                    <img src="{{ asset('img/Logo.png') }}" alt="Logo SignVerse" class="logo-img">
                    {{ __('Confirmar Contraseña') }}
                </div>

                <div class="card-body">
                    {{ __('Por favor, confirma tu contraseña antes de continuar.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                          <div class="row mb-3 align-items-center">
    <label for="email" class="col-md-4 col-form-label">{{ __('Correo Electrónico') }}</label>
    
    <div class="col-md-8">
        <input id="email" type="email" 
               class="form-control @error('email') is-invalid @enderror" 
               name="email" 
               value="{{ $email ?? old('email') }}" 
               required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmar Contraseña') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
