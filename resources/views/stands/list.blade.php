<!-- resources/views/registro-stand.blade.php -->

@extends('layouts.app')

@section('content')
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
    <link href="{{ asset('css/user/stand.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="">
    <div class="container-fluid">
        
        <div class="row">
            <!-- HEADER -->
            <div class="container-fluid  ">
                <div class="row headerUp pt-2">
                    <div class="col-4 text-center">
                        <i class='bx bx-chevron-left'></i>
                    </div>
                    <div class="col-4 text-center d-flex justify-content-between align-items-center ">
                        <button type="button" class="btn btn-link text-white" onclick="window.location.href='/home'">HOME</button>
                        <button type="button" class="btn btn-link text-white" onclick="window.location.href='/passport'">VISITADOS</button>
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
        
        <div class="">              
            <div class="row ">
                <div class="container-fluid contenidoCard">
                    <div class="row">
                        @foreach ($stands as $stand)
                            <div class="col-md-4 principal">
                                <!-- Mostrar calificación para cada stand -->
                                <img class="card-img-top logoStand" src="{{$stand->logo}}" alt="{{$stand->user->name}}">
                                <div class="calificacion">
                                    <input type="radio" id="estrella{{ $stand->id }}5" name="calificacion{{ $stand->id }}" value="5">
                                    <label for="estrella{{ $stand->id }}5">&#9733;</label>
                                    <input type="radio" id="estrella{{ $stand->id }}4" name="calificacion{{ $stand->id }}" value="4">
                                    <label for="estrella{{ $stand->id }}4">&#9733;</label>
                                    <input type="radio" id="estrella{{ $stand->id }}3" name="calificacion{{ $stand->id }}" value="3">
                                    <label for="estrella{{ $stand->id }}3">&#9733;</label>
                                    <input type="radio" id="estrella{{ $stand->id }}2" name="calificacion{{ $stand->id }}" value="2">
                                    <label for="estrella{{ $stand->id }}2">&#9733;</label>
                                    <input type="radio" id="estrella{{ $stand->id }}1" name="calificacion{{ $stand->id }}" value="1">
                                    <label for="estrella{{ $stand->id }}1">&#9733;</label>
                                </div>
                                <div class="card ">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$stand->user->name}}</h4>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><i class="bx bx-map"></i> <strong>Dirección:</strong> {{$stand->user->address}}</li>
                                            <li class="list-group-item"><i class="bx bx-phone"></i> <strong>Teléfono:</strong> {{$stand->user->phone_number}}</li>
                                            <p class="card-text"><i class="bx bx-info-circle"></i> {{ $stand->description }}</p>
                                            <li class="list-group-item"><i class="bx bx-link-external"></i> <strong>Sitio web:</strong> <a href="{{$stand->web}}" target="_blank">{{$stand->web}}</a></li>
                                        </ul>

                                        <div class="redes">          
                                            <div class="container social-icons mt-4  ">                                
                                                <!-- Enlaces a redes sociales -->
                                                <a href="{{ $stand->facebook }}" target="_blank" class="social-icon"><i class="bx bxl-facebook-circle bx-lg"></i></a>
                                                <a href="{{ $stand->instagram }}" target="_blank" class="social-icon"><i class="bx bxl-instagram-alt bx-lg"></i></a>
                                                <a href="{{ $stand->tiktok }}" target="_blank" class="social-icon"><i class="bx bxl-tiktok bx-lg"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
