<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nombre de tu Página</title>
    <!-- ICONOS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
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

        .navbar-line {
            background-color: #942339;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-line .btn-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .navbar-line button {
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
            white-space: nowrap;
            margin-right: 10px;
            min-width: 120px;
        }

        .navbar-line button span {
            position: absolute;
            display: block;
        }

        .icon-container {
            position: fixed;
            top: 10px;
            right: 10px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .icon-container box-icon {
            color: #fff !important;
            font-size: 24px;
        }

        /* Aquí puedes agregar más estilos según sea necesario para el resto de tu página */
    </style>
</head>

<body>
    <!-- Ícono en la parte superior derecha -->
    <div class="icon-container">
        <box-icon name='dots-vertical-rounded' color="#fff"></box-icon>
    </div>

    <!-- Línea roja de navegación -->
    <div class="navbar-line container-fluid">
        <!-- Contenedor izquierdo con el logo y el botón de regresar -->
        <div class="row">
            <div class="col-6 col-md-4">
                <!-- Botón de la flecha más pequeño -->
                <button class="btn-back"><i class='bx bx-chevron-left'></i></button>
            </div>
        </div>

        <!-- Contenedor derecho con los botones -->
        <div class="col-6 col-md-8 text-md-right">
            <!-- Contenedor para los botones -->
            <div class="btn-container">
                <!-- Botones de Iniciar Sesión y Registrarse -->
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="btn-custom">Home<span></span><span></span><span></span><span></span></a>
                    @else
                        <a href="{{ route('login') }}" class="btn-custom">Iniciar Sesión<span></span><span></span><span></span><span></span></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-custom">Registrarse<span></span><span></span><span></span><span></span></a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>

    <!-- Contenido del resto de tu página -->
    <div
