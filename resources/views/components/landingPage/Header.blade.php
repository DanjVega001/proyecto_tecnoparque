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

    <style>
        .btn-back {
            /* Ajusta el tamaño del botón de la flecha según sea necesario */
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

        /* Estilos para la línea ROJA */
        .navbar-line {
            background-color: #942339;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Estilo para los botones en la línea ROJA*/
        .navbar-line button {
            /* Elimina el color de fondo y establece el color del texto a blanco */
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
            text-decoration: none; /* Quitar la línea debajo del texto */
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

        /* Estilo para el ícono en la parte superior derecha */
        .icon-container {
            position: fixed;
            top: 10px;
            right: 10px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .icon-container box-icon {
            color: #fff !important; /* Forzar el color blanco */
            font-size: 24px;
        }

        .btn-custom{
            text-decoration: none;
        }

        @media only screen and (max-width: 767px) {
            .btn-custom {
                font-size: 11px; /* Tamaño más pequeño para dispositivos móviles */
            }

        }
        
    </style>
</head>

<body>
    <div class="icon-container">
        <box-icon name='dots-vertical-rounded' color="#fff"></box-icon>
    </div>

    <div class="navbar-line container-fluid">
        <div class="row">
            <div class="col-6 col-md-2">
                <button class="btn-back"><i class='bx bx-chevron-left'></i></button>
            </div>
        </div>

        <div class="col-6 col-md-10 text-md-right">
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

</body>

</html>
