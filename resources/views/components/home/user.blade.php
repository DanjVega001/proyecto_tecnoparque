<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Aplicación</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .scan-card {
            position: relative;
            height: 200px;
            margin-bottom: 20px;
        }

        .scan-card .card-body {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        #video-container {
            position: relative;
            width: 100%;
            height: 50vh;
            display: none;
        }

        #background-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .list-card {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h4>Bienvenido, {{ Auth::user()->name }}!</h4>
    <p>Gracias por usar nuestra aplicación. Aquí encontrarás información sobre eventos y más.</p>

    <div class="card scan-card">
        <div class="card-body">
            <h5 class="card-title">Ver Evaluación</h5>
            <p class="card-text">Accede para ver y completar la evaluación.</p>
            <button class="btn btn-primary" id="scanQR">Abrir Cámara</button>
        </div>
    </div>

    <div id="video-container" class="card scan-card">
        <video autoplay muted id="background-video">
            <source src="{{ asset('multimedia/videos/istockphoto-1314370116-640_adpp_is.mp4') }}" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
        <div class="card-body">
            <!-- Contenido adicional para la cámara, si es necesario -->
        </div>
    </div>

    <div class="card mt-3 list-card">
        <div class="card-body">
            <h5 class="card-title">Ver Listado de Stands</h5>
            <p class="card-text">Explora el listado completo de stands disponibles.</p>
            <a href="{{ route('stands.list') }}" class="btn btn-primary">Ir a Listado de Stands</a>
        </div>
    </div>

    <script>
        document.getElementById('scanQR').addEventListener('click', function () {
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

                        // Redirigir a la dirección del código QR (ajusta según tus necesidades)
                        window.location.href = code;
                    });
                })
                .catch(function (error) {
                    console.error('Error al acceder a la cámara: ', error);
                });
        });
    </script>
</body>

</html>
