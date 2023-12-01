<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quagga@0.12.1/dist/quagga.min.js"></script>
    <style>
        .scan-card {
            background: url('ruta/a/tu/imagen.gif') center center no-repeat;
            background-size: cover;
            position: relative;
            height: 200px; /* Ajusta la altura según sea necesario */
        }

        .scan-card .card-body {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white; /* Ajusta el color del texto según sea necesario */
        }
    </style>
</head>
<body>
    <h4>Bienvenido, {{ Auth::user()->name }}!</h4>
    <p>Gracias por usar nuestra aplicación. Aquí encontrarás información sobre eventos y más.</p>
    <div class="card scan-card">
        <video autoplay muted loop id="background-video">
            <source src="{{ asset('multimedia/videos/istockphoto-1314370116-640_adpp_is.mp4') }}" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
        <div class="card-body">
            <button class="btn btn-primary" id="scanQR" data-toggle="cameraButton">Abrir Cámara</button>
        </div>
    </div>

    <div class="card mt-3" id="video-container" style="display: none;">
        <!-- Agregado el elemento con id 'video-container' -->
    </div>

    <script>
        document.getElementById('scanQR').addEventListener('click', function () {
            // Ocultar el botón al hacer clic
            this.style.display = 'none';

            document.getElementById('video-container').style.display = 'block';

            // Obtener el elemento de video
            var video = document.getElementById('background-video');

            // Intentar acceder a la cámara
            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function (stream) {
                    // Asignar el flujo de la cámara al elemento de video
                    video.srcObject = stream;

                    // Inicializar QuaggaJS para la detección de códigos QR
                    Quagga.init({
                        inputStream: {
                            name: "Live",
                            type: "LiveStream",
                            target: video
                        },
                        decoder: {
                            readers: ["code_128_reader", "ean_reader", "ean_8_reader", "code_39_reader", "code_39_vin_reader", "codabar_reader", "upc_reader", "upc_e_reader", "i2of5_reader", "2of5_reader", "code_93_reader"]
                        }
                    }, function (err) {
                        if (err) {
                            console.error('Error al inicializar QuaggaJS: ', err);
                            return;
                        }

                        // Iniciar la detección de códigos QR
                        Quagga.start();
                    });

                    // Manejar el evento de detección de código QR
                    Quagga.onDetected(function (result) {
                        // Detener la detección para evitar múltiples redirecciones
                        Quagga.stop();

                        // Obtener el código QR reconocido
                        var code = result.codeResult.code;

                        // Verificar si la URL comienza con "http://" o "https://"
                        if (code.startsWith("http://") || code.startsWith("https://")) {
                            // Redirigir a la dirección del código QR
                            window.location.href = code;
                        } else {
                            // Si no comienza con "http://" o "https://", puedes manejarlo según tus necesidades
                            console.error('El código QR no es una URL válida:', code);
                        }

                        // Mostrar nuevamente el botón al detener la detección
                        document.getElementById('scanQR').style.display = 'block';
                    });
                })
                .catch(function (error) {
                    console.error('Error al acceder a la cámara: ', error);
                });
        });
    </script>

    <div class="card mt-3 list-card">
        <div class="card-body">
            <h5 class="card-title">Ver Listado de Stands</h5>
            <h6 class="card-subtitle mb-2 text-muted">Explora nuestra selección</h6>
            <p class="card-text">Explora el listado completo de stands disponibles. Encuentra la opción perfecta para tu evento.</p>
            <a href="{{ route('stands.list') }}" class="btn btn-primary">Ir a Listado de Stands</a>
        </div>
    </div>
</body>
</html>
