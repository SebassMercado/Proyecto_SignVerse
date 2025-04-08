@extends('layouts.app')

@section('content')
<head>
    <!-- Enlace al CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/estiloIniciarSesion.css') }}">
</head>



<div class="container">
    <div class="row justify-content-center">
        <div style="display: flex; justify-content: center;" class="col-md-6">
            <div class="card">
                <!-- Añadimos el logo centrado arriba del formulario -->
                <div class="card-body text-center">
                    <img src="{{ asset('img/Logo.png') }}" alt="Logo SignVerse" class="logo-img">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Correo Electrónico') }}</label>
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Aceptar') }}
                                </button>
                            </div>
                            <div class="col-md-4 offset-md-4 text-center mt-2">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidé mi Contraseña') }}
                                    </a>
                                @endif
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

