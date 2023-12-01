@extends('layouts.app')

@section('content')
<div class="container-fluid " style="margin: 0; padding: 0;">
    <style>
        .navbar-line {
            background-color: #942339;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white; /* Establece el color del texto a blanco */
        }

        .navbar-line a {
            color: white !important; /* Establece el color del enlace a blanco */
        }

        .navbar-line .navbar-toggler-icon {
            background-color: white; /* Establece el color del ícono del botón de navegación a blanco */
        }

        .navbar-line .navbar-toggler {
            border: none; /* Elimina el borde del botón de navegación */
        }

        /* Estilo específico para el enlace de Logout */
        .navbar-line .dropdown-item.logout-link {
            color: white !important; /* Establece el color del enlace Logout a blanco */
        }
    </style>

    <nav class="navbar-line navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto"></ul>
                <ul class="navbar-nav ms-auto">
                    <!-- Otros elementos de la barra de navegación -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item logout-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido de tu página -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- ... Tu contenido ... -->
        </div>
    </div>
</div>

<!-- Incluye la biblioteca de Font Awesome directamente -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha384-Ff/HKnA6hBmK2tMN6l0u8vZlYUAfxwBgFA6bPDe2Id/gP8R53bo4p8R73KcE2I6" crossorigin="anonymous"></script>
