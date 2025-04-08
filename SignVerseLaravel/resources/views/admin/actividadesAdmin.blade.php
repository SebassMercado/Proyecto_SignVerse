<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender LSC</title>
    <link rel="stylesheet" href="{{ asset('css/estiloActividadesAdmin.css') }}">
    <link rel="shortcut icon" href="{{ asset('imagenes/SignVerseFav.ico') }}" type="image/x-icon">
</head>
<body>

<header>
    <div class="logo">
        <img src="{{ asset('img/Logo.png') }}" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="{{ url('login') }}">Regresar</a></li>
            <li><a href="#">Opciones</a>
                <ul class="dropdown">
                    <li><a href="{{ url('errores/error404') }}">Misión Diaria</a></li>
                    <li><a href="{{ url('errores/error404') }}">Ranking</a></li>
                    <li><a href="{{ url('errores/error404') }}">Buzón de Sugerencias</a></li>
                    <li><a href="{{ url('errores/error404') }}">Mi Perfil</a></li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<main>
    <div class="section-background"></div>

    <div class="actividades-container">
        <a href="{{ url('cliente/actividades/aprenderAbc') }}" class="actividad-item">
            <img src="{{ asset('img/abc.png') }}" alt="Abecedario">
            <p>Gestionar Abecedario</p>
        </a>

        <a href="{{ url('cliente/actividades/aprenderColores') }}" class="actividad-item">
            <img src="{{ asset('img/colores.png') }}" alt="Colores">
            <p>Gestionar Colores</p>
        </a>

        <a href="{{ url('cliente/actividades/aprenderAnimales') }}" class="actividad-item">
            <img src="{{ asset('img/Animales.png') }}" alt="Animales">
            <p>Gestionar Animales</p>
        </a>
    </div>

    <div class="actividades-container2">
        <a href="{{ url('gestion') }}" class="actividad-item">
            <img src="{{ asset('img/engranaje.png') }}" alt="Engranaje">
            <p>Gestionar</p>
        </a>

        <a href="{{ url('gestion') }}" class="actividad-item">
            <img src="{{ asset('img/engranaje.png') }}" alt="Engranaje">
            <p>Gestionar</p>
        </a>

        <a href="{{ url('gestion') }}" class="actividad-item">
            <img src="{{ asset('img/engranaje.png') }}" alt="Engranaje">
            <p>Gestionar</p>
        </a>
    </div>

    <div class="actividades-container selector">
        <a href="{{ url('paginas/gestion') }}" class="actividad-item">
            <img src="{{ asset('img/engranaje.png') }}" alt="Engranaje">
            <p>Gestionar</p>
        </a>

        <a href="{{ url('paginas/gestion') }}" class="actividad-item">
            <img src="{{ asset('img/engranaje.png') }}" alt="Engranaje">
            <p>Gestionar</p>
        </a>

        <a href="{{ url('paginas/gestion') }}" class="actividad-item">
            <img src="{{ asset('img/engranaje.png') }}" alt="Engranaje">
            <p>Gestionar</p>
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

</body>
</html>
