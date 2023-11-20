<!-- resources/views/components/Header.blade.php -->

<head>
    <style>
       <style>
        
        .btn-back span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
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
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Estilo para los botones en la línea ROJA*/
        .navbar-line button {
            background: #942339;
            border: none;
            color: #fff;
            font-size: 15px;
            letter-spacing: 2px;
            font-family: 'Lato';
            font-weight: 600;
            outline: none;
            cursor: pointer;
            position: relative;
            padding: 0px;
            overflow: hidden;
            transition: all .5s;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);
            width: 150px;
            height: 50px;
        }

        .navbar-line button span {
            position: absolute;
            display: block;
        }

        .navbar-line button span:nth-child(1),
        .navbar-line button span:nth-child(2),
        .navbar-line button span:nth-child(3),
        .navbar-line button span:nth-child(4) {
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

        .navbar-line button:hover {
            transition: all .5s;
            transform: rotate(-3deg) scale(1.1);
            box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.6);
        }

        .navbar-line button:hover span {
            animation-play-state: paused;
        }
    </style>
</head>

<!-- Línea roja de navegación -->
<div class="navbar-line container-fluid">
    <!-- Contenedor izquierdo con el logo y el botón de regresar -->
    <div class="row">
        <div class="col-sm-12 col-md-4">
          
        </div>
    </div>

    <!-- Contenedor derecho con los botones -->
    <div class="col-sm-12 col-md-8 text-md-right">
        <!-- Botones de Iniciar Sesión y Registrarse -->
        <button type="button" class="btn-custom">Registrarse
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
        <button type="button" class="btn-custom">Iniciar Sesión
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
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
