<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender LSC - Abecedario</title>
    <link rel="stylesheet" href="{{ asset('css/estiloAbecedario.css') }}">
    <link rel="shortcut icon" href="{{ asset('imagenes/SignVerseFav.ico') }}" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Aprender LSC - Abecedario</h1>
    </header>

    <main>
        <div class="actividad">
            <div class="video-container">
                <video id="video-abecedario" class="video-abecedario" controls>
                    <source src="{{ asset('videos/El abecedario, del lenguaje de señas colombiana.mp4') }}" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
            </div>
            <div class="btn-regresar-container">
                <a href="{{ url('/cliente/actividades') }}" class="btn-regresar">Regresar</a>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 LSC Aprendizaje</p>
    </footer>
</body>
</html>
