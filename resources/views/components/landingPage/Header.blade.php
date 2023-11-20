<!-- resources/views/components/Header.blade.php -->

<head>
    <!-- ICONOS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Estilo para los botones en la línea ROJA*/
        .navbar-line .btn-container {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Centra los botones en la parte derecha */
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
            white-space: nowrap; /* Evita el salto de línea */
            margin-right: 10px;
            min-width: 120px; /* Establece un ancho mínimo para evitar problemas de visualización */
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
    </style>
</head>

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
