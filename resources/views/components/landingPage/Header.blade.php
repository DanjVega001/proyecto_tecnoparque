@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <style>
        /* Estilo para la línea ROJA */
        .navbar-line {
            background-color: #942339;
            border-bottom: 5px solid #ff0000; /* Ajusta el grosor y color de la línea roja */
            padding: 10px; /* Añade un relleno para mayor visibilidad */
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff; /* Ajusta el color del texto a blanco */
        }

        /* Estilo para el botón de flecha */
        .btn-back {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #942339;
            border: none;
            color: #fff;
            font-size: 13px;
            letter-spacing: 2px;
            font-family: 'Lato';
            font-weight: 600;
            outline: none;
            cursor: pointer;
            position: relative;
            padding: 0;
            overflow: hidden;
            transition: all .5s;
        }

        .btn-back i {
            font-size: 18px;
            color: #fff;
            margin-right: 5px;
        }

        .btn-back:hover {
            transition: all .5s;
            transform: rotate(-3deg) scale(1.1);
            box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.6);
        }

        /* Estilo para los botones en la barra de navegación */
        .navbar-line button {
            background: none;
            border: none;
            color: #fff;
            font-size: 13px;
            letter-spacing: 2px;
            font-family: 'Lato';
            font-weight: 600;
            outline: none;
            cursor: pointer;
            position: relative;
            padding: 0;
            overflow: hidden;
            transition: all .5s;
            white-space: nowrap;
            margin-right: 20px;
            min-width: 120px;
            text-decoration: none;
        }

        .navbar-line button span {
            position: absolute;
            display: block;
        }
    </style>

    <nav class="navbar navbar-expand-md navbar-light navbar-line">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name}}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
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

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="">
                    <!-- Contenido del resto de tu página -->
                    {{ __('You are logged in!') }}
                    @include('components.landingPage.footer')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
