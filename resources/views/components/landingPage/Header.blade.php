<!-- resources/views/components/Header.blade.php -->

<head>
    
    <style>
        /* Estilos para la línea verde */
        .navbar-line {
            background-color: #008000; /* Ajusté color verde  */
            padding: 10px; /* Ajustar  relleno para abarcar más espacio */
            margin-bottom: 20px; /* Ajustar el margen inferior según sea necesario */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Estilos para el logo */
        .logo {
            max-width: 1000%; /* Ajusta el ancho máximo del logo */
        }

        /* Estilo del nuevo botón */
        .btn-custom {
            background: #008000; /* Ajusté a un verde un poco más claro */
            border: none;
            color: #fff;
            font-size: 15px; /* Reduje el tamaño del texto */
            letter-spacing: 2px; /* Ajusté el espaciado de letras */
            font-family: 'Lato';
            font-weight: 600;
            outline: none;
            cursor: pointer;
            position: relative;
            padding: 0px;
            overflow: hidden;
            transition: all .5s;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4); /* Ajusté la sombra */
            width: 150px; /* Reduje el ancho del botón */
            height: 50px; /* Reduje la altura del botón */
        }

        .btn-custom span {
            position: absolute;
            display: block;
        }

        .btn-custom span:nth-child(1),
        .btn-custom span:nth-child(2),
        .btn-custom span:nth-child(3),
        .btn-custom span:nth-child(4) {
            height: 3px;
            width: 100%;
            background: linear-gradient(to right, rgba(0, 0, 0, 0), #f6e58d);
            border-radius: 1px;
            animation: span-animation 2s linear infinite;
        }

        @keyframes span-animation {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .btn-custom:hover {
            transition: all .5s;
            transform: rotate(-3deg) scale(1.1);
            box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.6); /* Ajusté la sombra en hover */
        }

        .btn-custom:hover span {
            animation-play-state: paused;
        }
    </style>
 
</head>


    <!-- Línea verde de navegación -->
    <div class="navbar-line container-fluid">
        <!-- Contenedor izquierdo con el logo -->
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <!-- Logo -->
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo">
            </div>
        </div>

      <!-- Contenedor derecho con los botones -->
<div class="col-sm-12 col-md-8 text-md-right">
    <!-- Botón de Iniciar Sesión -->
    <button type="button" class="btn-custom">Iniciar Sesión
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
    <!-- Botón de Registrarse -->
    <button type="button" class="btn-custom">Registrarse
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
</div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y jQuery (asegúrate de incluir jQuery antes de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-dzvlFJgu1AXLh16iDRdL3ew5CF5F3dfUcqzp7Jif9d1r6LrUZlW0S2RFIvoUH6DR"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyCYeFvAVP1PKGiQPhh6Uow=="
        crossorigin="anonymous"></script>
