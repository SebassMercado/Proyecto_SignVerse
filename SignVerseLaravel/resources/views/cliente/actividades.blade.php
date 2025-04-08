<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender LSC</title>
    <link rel="stylesheet" href="{{ asset('css/estiloActividades.css') }}">
    <link rel="shortcut icon" href="{{ asset('imagenes/SignVerseFav.ico') }}" type="image/x-icon">
</head>
<body>

<header>
    <div class="logo">
        <img src="{{ asset('imagenes/Logo.png') }}" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="{{ url('/home') }}">Regresar</a></li>
            <li><a href="#">Opciones</a>
                <ul class="dropdown">
                    <li><a href="{{ url('/error404') }}">Misión Diaria</a></li>
                    <li><a href="{{ url('/error404') }}">Ranking</a></li>
                    <li><a href="{{ url('/error404') }}">Buzón de Sugerencias</a></li>
                    <li><a href="{{ url('/error404') }}">Mi Perfil</a></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<main>
    <div class="section-background"></div>

    <div class="actividades-container">
        <a href="#" class="actividad-item" onclick="iniciarActividad('abecedario', event)">
            <img src="{{ asset('img/abc.png') }}" alt="Abecedario">
            <p>Aprender Abecedario</p>
        </a>

        <a href="#" class="actividad-item" onclick="iniciarActividad('colores')">
            <img src="{{ asset('img/colores.png') }}" alt="Colores">
            <p>Aprender Colores</p>
        </a>

        <a href="#" class="actividad-item" onclick="iniciarActividad('animales')">
            <img src="{{ asset('img/Animales.png') }}" alt="Animales">
            <p>Aprender Animales</p>
        </a>
    </div>

    <div class="actividades-container2 selector">
        <a href="#" class="actividad-item bloqueado">
            <img src="{{ asset('img/candado.png') }}" alt="Bloqueado">
            <p>Bloqueado</p>
        </a>

        <a href="#" class="actividad-item bloqueado">
            <img src="{{ asset('img/candado.png') }}" alt="Bloqueado">
            <p>Bloqueado</p>
        </a>

        <a href="#" class="actividad-item bloqueado">
            <img src="{{ asset('img/candado.png') }}" alt="Bloqueado">
            <p>Bloqueado</p>
        </a>
    </div>

    <div class="actividades-container selector">
        <a href="#" class="actividad-item bloqueado">
            <img src="{{ asset('img/candado.png') }}" alt="Bloqueado">
            <p>Bloqueado</p>
        </a>

        <a href="#" class="actividad-item bloqueado">
            <img src="{{ asset('img/candado.png') }}" alt="Bloqueado">
            <p>Bloqueado</p>
        </a>

        <a href="#" class="actividad-item bloqueado">
            <img src="{{ asset('img/candado.png') }}" alt="Bloqueado">
            <p>Bloqueado</p>
        </a>
    </div>
</main>

<!-- Ventana de nivel no disponible -->
<div id="alertaNivelNoDisponible" style="display: none;">
    <div class="window-blocked">
        <p id="mensajeNivelNoDisponible">Nivel no disponible actualmente, se implementará más adelante.</p>
        <button onclick="cerrarWindow('alertaNivelNoDisponible')">Cerrar</button>
    </div>
</div>

<!-- Window de alerta -->
<div id="alertaOverlay" style="display: none;">
    <div class="window-alerta">
        <p id="mensajeAlerta">Primero completa la evaluación del Abecedario.</p>
        <button onclick="cerrarWindow('alertaOverlay')">Cerrar</button>
    </div>
</div>

<!-- Window de evaluación Abecedario -->
<div class="overlay" id="windowAbecedario" style="display: none;">
    <div class="window-content">
        <img src="{{ asset('imagenes/abc.png') }}" alt="Abecedario">
        <p>✨ ¡Bienvenido! ✨ Aquí podrás aprender el abecedario en Lengua de Señas Colombiana (LSC) de una manera fácil y divertida. 🌟 ¡Anímate a explorar y dar tu primer paso en la comunicación inclusiva! 🤟😊.</p>
        <button onclick="cerrarWindow('windowAbecedario')">Atrás</button>
        <button onclick="redirigirEvaluacion()">Vamos</button>
    </div>
</div>

<footer>
    <p>&copy; 2024 Lenguaje de Señas. Todos los derechos reservados.</p>
</footer>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<script src="{{ asset('js/jsActividades.js') }}"></script>

</body>
</html>
