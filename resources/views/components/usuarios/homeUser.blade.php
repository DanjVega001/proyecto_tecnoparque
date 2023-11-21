@extends('layouts.perfil')

@section('content')
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
            <button type="button" class="btn-custom">INICIO 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <button type="button" class="btn-custom">VISITADOS
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


    <!-- Tarjetas de los Stands -->
    <div class="container mt-5">
        <div class="row">
            @foreach($stands as $stand)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $stand->photo_url }}" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $stand->company_name }}</h5>
                            <p class="card-text">{{ $stand->description }}</p>
                            <!-- Botón para abrir la cámara y escanear QR -->
                            <button class="btn btn-primary" onclick="scanQR('{{ $stand->company_name }}')">Calificar Este Stand</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Contenedor para superponer la cámara -->
    <div id="cameraContainer" style="position: fixed; top: 50px; left: 50px; width: 30%; height: auto; max-height: 70%; z-index: 1000;"></div>

    <!-- Script para manejar la apertura de la cámara y escaneo QR -->
    <script>
        function scanQR(companyName) {
            // Solicitar acceso a la cámara
            navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
                .then(function (stream) {
                    // Crear el elemento de video y agregarlo al contenedor de la cámara
                    var video = document.createElement('video');
                    video.srcObject = stream;
                    document.getElementById('cameraContainer').appendChild(video);

                    // Utilizar una librería de escaneo QR (puedes usar ZXing o QuaggaJS, por ejemplo)
                    // Aquí, se utiliza ZXing mediante el CDN
                    import('https://cdn.rawgit.com/zxing-js/instascan/1.0.0/instascan.min.js')
                        .then((instascan) => {
                            var scanner = new instascan.Scanner({ video: video });
                            scanner.addListener('scan', function (content) {
                                // Aquí puedes manejar el contenido del código QR escaneado
                                alert('Código QR escaneado para ' + companyName + ': ' + content);

                                // Detener el escáner y cerrar la cámara
                                scanner.stop();
                                video.pause();
                                video.srcObject.getTracks().forEach(track => track.stop());
                                video.remove();
                            });

                            // Iniciar el escáner
                            instascan.Camera.getCameras().then(function (cameras) {
                                if (cameras.length > 0) {
                                    scanner.start(cameras[0]);
                                } else {
                                    console.error('No se encontraron cámaras disponibles.');
                                    video.remove(); // Eliminar el elemento de video en caso de error
                                }
                            });
                        })
                        .catch(function (error) {
                            console.error('Error al cargar la librería instascan: ', error);
                            video.remove(); // Eliminar el elemento de video en caso de error
                        });
                })
                .catch(function (error) {
                    console.error('Error al acceder a la cámara: ', error);
                });
        }
    </script>
@endsection
