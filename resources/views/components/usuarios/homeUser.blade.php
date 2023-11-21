<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registro Stand</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- ICONOS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="user.css">
        <link href="{{ asset('css/user/user.css') }}" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- HEADER -->
                <div class="container-fluid ">
                    <div class="row headerUp pt-2">
                        <div class="col-4 text-center">
                            <i class='bx bx-chevron-left'></i>
                        </div>
                        <div class="col-4 text-center d-flex justify-content-between align-items-center ">
                            <button type="button" class="btn btn-link text-white">INICIO</button>
                            <button type="button" class="btn btn-link text-white">VISITADOS</button>
                        </div>
                        
                        <div class="col-4 text-center">
                            <i class='bx bx-user'></i>
                        </div>
                  
                    </div>
                    <div class="row">
                        <div class="col-sm lineaOsucra">
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row row_1">
                <div class="container-fluid">
                    <div class="row contenidoForm">
                        @if(isset($stands[0]))
                            <?php $firstStand = $stands[0]; ?>
                            <div class="col-md-4 mb-4">
                                <div class="card ">
                                    <img class="card-img-top logoStand" src="{{ $firstStand->photo_url }}" alt="{{ $firstStand->company_name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $firstStand->company_name }}</h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="bx bx-map"></i> <strong>Dirección:</strong> {{ $firstStand->address }}</li>
                                            <li class="list-group-item"><i class="bx bx-phone"></i> <strong>Teléfono:</strong> {{ $firstStand->phone_number }}</li>
                                            <p class="card-text"><i class="bx bx-info-circle"></i> {{ $firstStand->description }}</p>
                                            <li class="list-group-item"><i class="bx bx-link-external"></i> <strong>Sitio web:</strong> <a href="{{ $firstStand->website_url }}" target="_blank">{{ $firstStand->website_url }}</a></li>
                                        </ul>
                                        <div class="redes">
                                            <p>Redes Sociales</p>
                                        </div>
                                        <div class="social-icons mt-4 ">
                                            
                                            <a href="#" target="_blank" class="social-icon"><i class="bx bxl-facebook-circle bx-lg"></i></a>
                                            <a href="#" target="_blank" class="social-icon"><i class="bx bxl-instagram-alt bx-lg"></i></a>
                                            <a href="#" target="_blank" class="social-icon"><i class="bx bxl-tiktok bx-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <p>No hay información disponible en este momento.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
