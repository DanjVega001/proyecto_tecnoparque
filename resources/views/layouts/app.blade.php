<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta etiquetas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
    <!-- Título de la página -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Enlace a los estilos de la aplicación -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
=======
    <title>Passport</title>

    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="{{ asset('js/scanner.js') }}"></script>


>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe

    <!-- Fuentes de Google -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<<<<<<< HEAD
    <!-- Estilos de CSS de la Carpeta public -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index_css/landing_page.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/home/user.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/empresa.css') }}" rel="stylesheet">



    <!-- Iconos -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
=======
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
</head>

<body>
    <div id="app">
<<<<<<< HEAD
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-GLhlTQ8i1IyZFf7R6Z75B6QQPGZ7I6tMOFYEMB+D5I4E2x4Ij2im/h3K2J5uWrM2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
=======
        <nav class="navbar navbar-expand-md navbar-light bg-passport shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo-home" src="{{asset('images/logo-login.png')}}" alt="">
                    <!--{{ config('app.name', 'Laravel') }}-->
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Inicio</a>
                        </li>
                        <!--Menu para el visitante-->
                        @php
                        $mostrarMenu = \Auth::user()->hasRole('Visitante');
                        @endphp
                        @if($mostrarMenu)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('qr-scanner')}}">Escanear Qr</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stand.visitantes') }}">Stands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('passport.index') }}">Visitados</a>
                        </li>
                        @endif
                        @endauth

                        <!--Menu para el admin-->
                        @auth
                        @php
                        $mostrarMenuAdmin = \Auth::user()->hasRole('Administrador');
                        @endphp
                        @if($mostrarMenuAdmin)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('empresa.index') }}">Empresa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('places.index') }}">Lugares</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('schedule.index') }}">Agenda</a>
                        </li>
                        @endif
                        @endauth

                        <!--Menu para la empresa-->
                        @auth
                        @php
                        $mostrarMenuEmpresa = \Auth::user()->hasRole('Empresa');
                        @endphp
                        @if($mostrarMenuEmpresa)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('stand.index') }}">Gestionar Stand</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('agenda.index') }}">Agenda</a>
                        </li>
                        @endif
                        @endauth
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ (Auth::user()->name) }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="row">
    <div class="col">
        <footer class="footer" >
            <p>@copy 2023 - Tecnoparque Nodo Bucaramanga</p>
        </footer>
    </div>
</div>
    
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
</body>

</html>