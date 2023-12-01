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
        .navbar-line {
            background-color: #942339;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap; /* Para que los elementos se envuelvan en dispositivos pequeños */
        }

        /* Estilo para los botones en la línea ROJA*/
        .navbar-line .btn-custom {
            color: #fff;
            font-size: 13px;
            letter-spacing: 2px;
            font-family: 'Roboto', sans-serif; /* Cambiar a la fuente de Google Fonts */
            font-weight: 600;
            border: none;
            outline: none;
            cursor: pointer;
            position: relative;
            padding: 0;
            overflow: hidden;
            transition: all .5s;
            white-space: nowrap;
            text-decoration: none; /* Quitar la línea debajo del texto */
        }

        .navbar-line .btn-custom:hover {
            transition: all .5s;
            transform: rotate(-3deg) scale(1.1);
        }

        .navbar-line button span {
            position: absolute;
            display: block;
        }

        .navbar-line button span:nth-child(1),
        .navbar-line button span:nth-child(2),
        .navbar-line button span:nth-child(3),
        .navbar-line button span:nth-child(4) {
        }

        @media (max-width: 767px) {
            .navbar-line {
                flex-direction: row; /* Cambia la dirección del eje principal a fila en dispositivos pequeños */
                align-items: center; /* Alinea los elementos al centro en dispositivos pequeños */
            }

            .navbar-line .btn-custom {
                margin-right: 0; /* Elimina el margen derecho en dispositivos pequeños */
                margin-bottom: 10px; /* Agrega margen inferior entre los botones en dispositivos pequeños */
            }
        }
    </style>
</head>

<body>
    <div class="icon-container">
        <box-icon name='dots-vertical-rounded' color="#fff"></box-icon>
    </div>

    <div class="container">
        <div class="navbar-line">
            <div class="row">
                <div class="col-6 col-md-2">
                    <!-- Contenido actual del primer bloque -->
                </div>
            </div>

            <div class="col-12 col-md-10 text-md-right d-flex">
                <div class="btn-container">
                    <!-- Botones de Iniciar Sesión y Registrarse -->
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="btn-custom" style="color: #fff;">HOME<span></span><span></span><span></span><span></span></a>
                        @else
                            <a href="{{ route('login') }}" class="btn-custom" style="color: #fff;">INICIAR SESION<span></span><span></span><span></span><span></span></a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn-custom" style="color: #fff;">REGISTRARSE<span></span><span></span><span></span><span></span></a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>
