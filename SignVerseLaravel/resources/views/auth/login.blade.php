

@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/estiloIniciarSesion.css') }}">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div style="display: flex; justify-content: center;" class="col-md-6"> <!-- Más ancho para que se vea mejor -->
            <div class="card p-4">
                <div class="card-body text-center">
                    <img src="{{ asset('img/Logo.png') }}" alt="Logo SignVerse" class="logo-img mb-4">
                    <div class="card-header text-center mb-3">{{ __('Iniciar Sesion') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}"
                                placeholder="Correo Electrónico"
                                required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback text-start d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                placeholder="Contraseña"
                                required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback text-start d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-50">
                            {{ __('Aceptar') }}
                        </button>

                       <div class="mt-3">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                            class="btn btn-link text-black text-decoration-none link-primary hover-underline">
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


