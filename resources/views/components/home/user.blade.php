<div>
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
    
    <h4>Bienvenido, {{ Auth::user()->name }}!</h4>
    <p>Gracias por usar nuestra aplicación. Aquí encontrarás información sobre eventos y más.</p>
    <div class="card scan-card">
        <video autoplay muted loop id="background-video">
            <source src="{{ asset('multimedia/videos/istockphoto-1314370116-640_adpp_is.mp4') }}" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
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
                target: document.querySelector('#your-scanner-container'), // Reemplaza con el contenedor real
                constraints: {
                    width: 480,
                    height: 320,
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
            // Aquí puedes realizar acciones adicionales con el resultado del escaneo
        });
    });
</script>
@endpush
