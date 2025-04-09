<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender LSC</title>
    <link rel="stylesheet" href="{{ asset('css/estiloEvaluaciones.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/SignVerseFav.ico') }}" type="image/x-icon">
</head>
<body>

<header>
    <div class="logo">
        <img src="{{ asset('img/Logo.png') }}" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="{{ url('/home') }}">Regresar</a></li>
            <li><a href="#">Opciones</a>
                <ul class="dropdown">
                    <li><a href="{{ url('/errores/error404') }}">Misión Diaria</a></li>
                    <li><a href="{{ url('/errores/error404') }}">Ranking</a></li>
                    <li><a href="{{ url('/errores/error404') }}">Buzón de Sugerencias</a></li>
                    <li><a href="{{ url('/errores/error404') }}">Mi Perfil</a></li>
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
            <p>Evaluar Abecedario</p>
        </a>

        <a href="#" class="actividad-item" onclick="iniciarActividad('colores')">
            <img src="{{ asset('img/colores.png') }}" alt="Colores">
            <p>Evaluar Colores</p>
        </a>

        <a href="#" class="actividad-item" onclick="iniciarActividad('animales')">
            <img src="{{ asset('img/Animales.png') }}" alt="Animales">
            <p>Evaluar Animales</p>
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
        <img src="{{ asset('img/abc.png') }}" alt="Abecedario">
        <p>🔠✨ ¡Es hora de poner a prueba tus conocimientos! ✨🔠
        Demuestra cuánto sabes sobre el abecedario en Lengua de Señas Colombiana (LSC) y sigue aprendiendo de forma divertida. 🤟😊</p>
        <button onclick="cerrarWindow('windowAbecedario')">Atrás</button>
        <button onclick="redirigirEvaluacion()">Vamos</button>
    </div>
</div>

<footer class="footer">
            <div class="container">
                <p class="mb-0">&copy; {{ date('Y') }} SignVerse. Todos los derechos reservados.</p>
            </div>
        </footer>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<script src="{{ asset('js/jsEvaluaciones.js') }}"></script>

</body>
</html>
