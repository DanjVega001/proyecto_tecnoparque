<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombre de tu Página</title>
    <!-- ICONOS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Agregando las rutas de scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-dzvlFJgu1AXLh16iDRdL3ew5CF5F3dfUcqzp7Jif9d1r6LrUZlW0S2RFIvoUH6DR"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyCYeFvAVP1PKGiQPhh6Uow=="
        crossorigin="anonymous"></script>

    <!-- Agregar enlace a la fuente de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Estilos para la línea ROJA */
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif; /* Cambiar a la fuente de Google Fonts */
        }

        .navbar-line {
            background-color: #942339;
            padding: 10px;
            display: flex;
            justify-content: center; /* Centra los elementos horizontalmente */
            align-items: center;
            flex-wrap: wrap; /* Para que los elementos se envuelvan en dispositivos pequeños */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Agrega sombra al encabezado */
        }

        /* Estilo para los botones en la línea ROJA*/
        .navbar-line .btn-custom {
            color: #fff;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: 600;
            border: 2px solid transparent; /* Agrega un borde transparente a los botones */
            outline: none;
            cursor: pointer;
            position: relative;
            transition: all .3s;
            white-space: nowrap;
            text-decoration: none; /* Quitar la línea debajo del texto */
            margin: 5px; /* Espaciado entre los botones */
        }

        .navbar-line .btn-custom:hover {
            border-color: #fff; /* Cambia el color del borde al pasar el cursor */
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* Agrega una sombra al pasar el cursor */
        }

        .navbar-line button span {
            position: absolute;
            display: block;
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
            color: black !important; /* Establece el color del enlace Logout a negro */
        }

        @media (max-width: 767px) {
            .navbar-line {
                flex-direction: column; /* Cambia la dirección del eje principal a columna en dispositivos pequeños */
                height: auto; /* Altura automática en dispositivos pequeños */
            }

            .navbar-line .btn-custom {
                margin-bottom: 10px; /* Agrega margen inferior entre los botones en dispositivos pequeños */
                text-align: center; /* Centra los botones en dispositivos pequeños */
            }

            .logout-btn-container {
                margin-top: 10px; /* Ajusta el espacio entre el botón de logout y otros botones */
            }
        }
    </style>
</head>

<body>
    <div class="icon-container">
        <box-icon name='dots-vertical-rounded' color="#fff"></box-icon>
    </div>

    <div class="navbar-line">
        <div class="btn-container d-flex">
            <!-- Botones específicos para cada tipo de usuario -->
            @auth
                @if(Auth::user()->hasRole('Visitante'))
                    <a href="{{ url('/home') }}" class="btn-custom">SCANEAR QR<span></span><span></span><span></span><span></span></a>
                    <a href="{{ url('/stands') }}" class="btn-custom">STANDS<span></span><span></span><span></span><span></span></a>
                @elseif(Auth::user()->hasRole('Empresa'))
                    <a href="{{ url('/home') }}" class="btn-custom">HOME<span></span><span></span><span></span><span></span></a>
                    <a href="{{ url('/stand') }}" class="btn-custom">CREAR STANDS<span></span><span></span><span></span><span></span></a>
                @elseif(Auth::user()->hasRole('Administrador'))
                    <a href="{{ url('/home') }}" class="btn-custom">HOME<span></span><span></span><span></span><span></span></a>
                    <a href="{{ url('/empresa') }}" class="btn-custom">CREAR EMPRESA<span></span><span></span><span></span><span></span></a>
                @endif

                <div class="col-6 text-center pl-2 mt-1">
                    <a id="navbarDropdown" class="bx bx-dots-vertical-rounded" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <!-- {{ Auth::user()->name}} -->
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item logout-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('CERRAR SESION') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                <!-- Botones de Iniciar Sesión y Registrarse -->
                <a href="{{ route('login') }}" class="btn-custom">INICIAR SESION<span></span><span></span><span></span><span></span></a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-custom">REGISTRARSE<span></span><span></span><span></span><span></span></a>
                @endif
            @endauth
        </div>
    </div>
</body>

</html>
