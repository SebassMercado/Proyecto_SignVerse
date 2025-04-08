<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación de Abecedario LSC</title>
    <link rel="stylesheet" href="{{ asset('css/estiloEvaluacionAbc.css') }}">
    <link rel="shortcut icon" href="{{ asset('imagenes/SignVerseFav.ico') }}" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Evaluación de Abecedario LSC</h1>
    </header>

    <main>
        <div id="pregunta-container" class="actividad">
            <h2 id="pregunta-titulo">Selecciona la letra correspondiente a la imagen</h2>
            <img id="imagen-pregunta" src="" alt="Letra en lengua de señas">
            <div id="opciones-container"></div>
        </div>

        <div id="resultado" class="resultado" style="display: none;">
            <h2>Resultados</h2>
            <p>Respuestas correctas: <span id="respuestas-correctas"></span>/10</p>
            <button onclick="reiniciarEvaluacion()">Reiniciar Evaluación</button>
        </div>

        <button id="abandonar-btn" onclick="document.getElementById('confirmar-abandono').style.display = 'flex';">Abandonar</button>

        <div id="confirmar-abandono" class="modal">
            <div class="modal-contenido">
                <h3>¿Seguro que quieres abandonar?</h3>
                <p>Tendrás repercusiones si abandonas ahora.</p>
                <button onclick="window.location.href = '{{ url('/cliente/evaluaciones') }}';">Sí, Abandonar</button>
                <button onclick="document.getElementById('confirmar-abandono').style.display = 'none';">Cancelar</button>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 SignVerse - Evaluación de LSC</p>
    </footer>

    <script src="{{ asset('js/jsEvaluacionAbc.js') }}"></script>
</body>
</html>
