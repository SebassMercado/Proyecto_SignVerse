<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @if(Auth::user()->cod_tipo_fk == 'A')
        <link rel="stylesheet" href="{{ asset('css/estiloAdmin.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/estiloCliente.css') }}">
    @endif
    <link rel="shortcut icon" href="{{ asset('img/SignVerseFav.ico') }}" type="image/x-icon">
</head>
<body>
    @if(Auth::user()->cod_tipo_fk == 'A')
        <!-- Vista ADMIN -->
        <header>
            <img src="{{ asset('img/Logo.png') }}" alt="Logo" class="logo">
            <h1>Panel de Administrador</h1>
            <div class="user-greeting">
        Hola, {{ Auth::user()->name }} 👋
    </div>
        </header>

        <main>
            <a href="{{ route('users.index') }}" class="card gestionar-usuarios">Gestionar Usuarios</a> <!-- Nuevo -->
            <a href="{{ url('/admin/evaluacionesAdmin') }}" class="card gestionar-evaluaciones">Gestionar Evaluaciones</a>
            <a href="{{ url('/admin/actividadesAdmin') }}" class="card gestionar-aprendizaje">Gestionar Aprendizaje</a>
            <a href="{{ url('/errores/error404') }}" class="card gestionar-ranking">Gestionar Ranking</a>
            <a href="{{ route('sugerencias.index') }}" class="card abrir-buzon">Gestionar Buzón de Sugerencias</a>
            <a href="{{ url('/errores/error404') }}" class="card gestiones-futuras">Gestiones Futuras</a>
        </main>

        <footer>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <button class="logout-button">Cerrar Sesión</button>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </footer>

    @else
        <!-- Vista CLIENTE -->
        <header>
            <img src="{{ asset('img/Logo.png') }}" alt="Logo de Mi Página" class="logo">
            <nav class="nav-container">
                 <div class="user-greeting">
        Hola, {{ Auth::user()->name }} 👋
    </div>
                <ul>
                    <li>
                        <a href="#">Opciones</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('/errores/error404') }}">Misión Diaria</a></li>
                            <li><a href="{{ url('/errores/error404') }}">Ranking</a></li>
                            <li><a href="{{ route('cliente.sugerencia') }}">Buzón de sugerencias</a></li>
                            <li><a href="{{ url('/errores/error404') }}">Mi perfil</a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <section class="content">
                <a href="{{ url('/cliente/actividades') }}" class="aprender">
                    <img src="{{ asset('img/Aprender.png') }}" alt="aprender">
                    <h2>Aprender LSC</h2>
                </a>
                <a href="{{ url('/cliente/evaluaciones') }}" class="evaluar">
                    <img src="{{ asset('img/cuestionario.png') }}" alt="cuestionario">
                    <h2>Evaluar mis conocimientos</h2>
                </a>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <p class="mb-0">&copy; {{ date('Y') }} SignVerse. Todos los derechos reservados.</p>
            </div>
        </footer>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endif
</body>
</html>
