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
                    {{ __('Cambiar Contraseña') }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                         <div class="mb-3">
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ $email ?? old('email') }}"
                                   placeholder="Correo Electrónico"
                                   required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback d-block text-start" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar Enlace') }}
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

