@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/estiloInicio.css') }}">

    <div id="background" class="background">
        <section class="content">
            <div class="text-box">
                <h1>Aprende 12 señas básicas de la Lengua de Señas Colombiana</h1>
                <p>→ El Día de las Lenguas de Señas destaca más de 300 lenguas.</p>
                <a href="#" class="btn-ver-mas">Ver más</a>
            </div>
            <div class="image-box">
                <img src="{{ asset('img/aprender1.jpg') }}" alt="Imagen de ejemplo">
            </div>
        </section>
        
        <section class="content">
            <div class="image-box">
                <img src="{{ asset('img/Aprender2.jpg') }}" alt="Imagen de ejemplo">
            </div>
            <div class="text-box">
                <h1>¿Por qué es importante aprender Lengua de Señas?</h1>
                <p>→ Promueve la inclusión de las personas con discapacidad auditiva.</p>
                <a href="#" class="btn-ver-mas">Ver más</a>
            </div>
        </section>

        <section class="content">
            <div class="text-box">
                <h1>¿Qué es la Lengua de Señas Colombiana?</h1>
                <p>→ Es la lengua de las personas sordas en Colombia.</p>
                <a href="#" class="btn-ver-mas">Ver más</a>
            </div>
            <div class="image-box">
                <img src="{{ asset('img/Aprender3.jpg') }}" alt="Imagen de ejemplo">
            </div>
        </section>
    </div>
@endsection
