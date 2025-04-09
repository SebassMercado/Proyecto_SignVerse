<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link rel="stylesheet" href="{{ asset('css/estiloError404.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/SignVerseFav.ico') }}" type="image/x-icon">
</head>
<body>

    <div id="background"></div>

    <div class="error-container">
        <h1>Error 404</h1>
        <p>Lo sentimos, la página que buscas no existe o ha sido movida.</p>
        <a href="{{ url()->previous() }}" class="cta-button">Regresar</a>
    </div>

</body>
</html>
