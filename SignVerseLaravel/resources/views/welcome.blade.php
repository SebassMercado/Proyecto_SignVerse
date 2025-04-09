@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/estiloInicio.css') }}">

    <div id="background" class="background">
        <section class="content">
            <div class="text-box">
                <h1>¿Qué es Singverse?</h1>
                <p>→ Es una aplicación educativa que facilita el aprendizaje de la Lengua de Señas Colombiana (LSC).</p>
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
                <h1>Objetivo de Singverse</h1>
                <p>→ Promover la inclusión a través del aprendizaje interactivo del LSC para oyentes y personas sordas.</p>
                <a href="#" class="btn-ver-mas">Ver más</a>
            </div>
        </section>

        <section class="content">
            <div class="text-box">
                <h1>¿Qué ofrece la pagina web?</h1>
                <p>→ Módulos de aprendizaje, pruebas, niveles, recomendaciones y un buzón de sugerencias.</p>
                <a href="#" class="btn-ver-mas">Ver más</a>
            </div>
            <div class="image-box">
                <img src="{{ asset('img/Aprender3.jpg') }}" alt="Imagen de ejemplo">
            </div>
        </section>
    </div>
@endsection
