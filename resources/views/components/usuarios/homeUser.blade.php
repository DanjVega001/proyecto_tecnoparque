@extends('layouts.perfil')

@section('content')
    <!-- Carousel wrapper -->

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
