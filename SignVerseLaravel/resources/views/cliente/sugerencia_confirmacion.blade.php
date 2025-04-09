@extends('layouts.app')

@section('title', 'Sugerencia Enviada')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-5 text-center" style="max-width: 500px; width: 100%; border-radius: 15px; background-color: #f8f9fa;">
        <div class="card-body">
            <h2 class="mb-4 text-success" style="font-size: 2rem;">¡Sugerencia enviada correctamente!</h2>

            <div class="d-flex justify-content-center gap-4 mb-4">
                <a href="{{ route('cliente.sugerencia') }}" class="btn btn-primary w-100" style="border-radius: 25px; padding: 10px 20px;">Redactar nueva sugerencia</a>
            </div>

            <div class="d-flex justify-content-center gap-4">
                <a href="{{ route('home') }}" class="btn btn-outline-secondary w-100" 
                   style="border-radius: 25px; background-color: #6c757d; color: white; border-color: #6c757d; padding: 10px 20px;"
                   onmouseover="this.style.backgroundColor='#5a6268'; this.style.borderColor='#5a6268';"
                   onmouseout="this.style.backgroundColor='#6c757d'; this.style.borderColor='#6c757d';">
                   Regresar al inicio
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
