<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/SignVerseFav.ico') }}">

    <!-- Fonts y estilos -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="fondo">
    <div id="app" class="d-flex flex-column min-vh-100">
        <!-- HEADER ESTILO LOGUEADO -->
        <header class="header">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" width="40" height="40" class="header.Logo">
                    <a class="navbar-brand fw-bold fs-4" href="{{ url('/') }}">SignVerse</a>
                </div>
                <nav>
                    <ul class="nav">
                        @guest
                            <li class="nav-item">
                                <a class="btn-nav" href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn-nav" href="{{ route('register') }}">Registrarse</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
    style="border-radius: 25px; background-color: #007bff; color: white; padding: 10px 20px; font-size: 16px; transition: background-color 0.3s ease;">
    {{ Auth::user()->name }}
</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>
                                    </li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </header>

        <!-- CONTENIDO PRINCIPAL -->
        <main class="py-4 flex-fill">
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <p class="mb-0">&copy; {{ date('Y') }} SignVerse. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</body>
</html>
