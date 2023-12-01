<div>
    <style>
        .scan-card {
            position: relative;
            height: 200px;
        }

        .scan-card video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .scan-card .card-body {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }
    </style>

    <h4>Bienvenido, {{ Auth::user()->name }}!</h4>
    <p>Gracias por usar nuestra aplicación. Aquí encontrarás información sobre eventos y más.</p>
    <div class="card scan-card">
        <video autoplay muted playsinline id="scanner-video"></video>
        <div class="card-body">
            <h5 class="card-title">Ver Evaluación</h5>
            <p class="card-text">Accede para ver y completar la evaluación.</p>
            <button class="btn btn-primary" id="scanQR">Abrir Cámara</button>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Ver Listado de Stands</h5>
            <p class="card-text">Explora el listado completo de stands disponibles.</p>
            <a href="{{ route('stands.list') }}" class="btn btn-primary">Ir a Listado de Stands</a>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.rawgit.com/serratus/quaggaJS/0.12.1/dist/quagga.min.js"></script>
<script>
    document.getElementById('scanQR').addEventListener('click', function () {
        // Configuración básica para Quagga.js
        Quagga.init({
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector('#scanner-video'),
                constraints: {
                    width: 480,
                    height: 320,
                    facingMode: "environment", // Utiliza la cámara trasera del dispositivo si está disponible
                },
            },
            decoder: {
                readers: ["code_128_reader"],
            },
        }, function (err) {
            if (err) {
                console.error(err);
                return;
            }
            Quagga.start();
        });

        // Manejar el resultado del escaneo
        Quagga.onDetected(function (result) {
            alert('Código QR escaneado: ' + result.codeResult.code);
            // Realiza acciones adicionales con el resultado del escaneo si es necesario
        });
    });
</script>
@endpush
