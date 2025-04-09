@extends('layouts.app')

@section('title', 'Responder Sugerencia')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-5" style="max-width: 500px; width: 100%; background-color: rgba(120, 210, 199, 0.8); border-radius: 20px;">
        <div class="card-body text-center">
            <img src="{{ asset('img/buzon.png') }}" alt="Logo buzon" class="logo-img mb-4" style="width: 120px; height: auto;">
            <h3 class="mb-4 text-dark">Detalle de la Sugerencia</h3>

            <!-- Título en recuadro -->
            <div class="mb-3 text-left">
                <div class="p-3 border rounded" style="background-color: #f7f7f7; border-color: #ced4da;">
                    <strong>Título:</strong> <span class="text-muted">{{ $sugerencia->titulo }}</span>
                </div>
            </div>

            <!-- Mensaje en recuadro -->
            <div class="mb-4 text-left">
                <div class="p-3 border rounded" style="background-color: #f7f7f7; border-color: #ced4da;">
                    <strong>Mensaje:</strong>
                    <p class="text-muted">{{ $sugerencia->mensaje }}</p>
                </div>
            </div>

            <!-- Respuesta en recuadro -->
            <form action="{{ route('sugerencias.update', $sugerencia->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4 text-left">
                    <div class="p-3 border rounded" style="background-color: #f7f7f7; border-color: #ced4da;">
                        <label for="respuesta" class="form-label">Tu Respuesta</label>
                        <textarea name="respuesta" id="respuesta" class="form-control" rows="4" placeholder="Escribe tu respuesta aquí">{{ old('respuesta', $sugerencia->respuesta) }}</textarea>
                        @error('respuesta')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <input type="hidden" name="estado" value="respondida">

                <!-- Botones de guardar y cancelar -->
                <div class="d-flex justify-content-center gap-4">
                    <button type="submit" class="btn btn-primary w-75" style="border-radius: 25px;">Guardar Respuesta</button>
                </div>

                <div class="mt-3 text-center">
                    <a href="{{ route('sugerencias.index') }}" class="btn btn-outline-secondary w-75" 
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
