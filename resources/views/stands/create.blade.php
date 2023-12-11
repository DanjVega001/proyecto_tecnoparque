@extends('layouts.app')

@section('content')
<<<<<<< HEAD

<!DOCTYPE html>
<html lang="en">
    <head>
    @include('components.header')
        <title>Registro Stand</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- ICONOS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- STYLES -->
        <link href="{{ asset('css/forms/registroStands.css') }}" rel="stylesheet">

    </head>
    <body>
    <div class="container-fluid">
            <div class="row">
               
            
            <div class="row">
                <div class="container-fluid contenidoForm">
                    <div class="row ">
                        <img class="logoStand" src="{{ asset('img/stands/logoStand.png') }}" alt="logoStand">
                    </div>
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('stand.store') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                                <label for="name">Nombre Empresa</label><br>
                                <input type="text" id="name" name="name" class="txtForm" required><br>
                                <hr>

                                <label for="logo">Logo</label><br>
                                <input type="file" id="logo" name="logo" accept="image/*" required><br>
                                <hr>

                                <label for="banner">Banner</label><br>
                                <input type="file" id="banner" name="banner" accept="image/*"required><br>
                                <hr>
                                
                                <label for="floatingTextarea2">Descripción</label><br>
                                <textarea class="txtForm"  name="description" style="height: 100px" required></textarea>
                                
                                <hr>

                                <i class='bx bxl-facebook-circle icono'></i>
                                <input type="text" id="facebook" class="txtForm" name="facebook"><br>
                                <hr>

                                <i class='bx bxl-instagram-alt icono' ></i>
                                <input type="text" id="instagram" class="txtForm" name="instagram"><br>
                                <hr>

                                <i class='bx bxl-tiktok icono' ></i>
                                <input type="text" id="tiktok" class="txtForm" name="tiktok"><br>
                                <hr>

                                <label for="web">URL Pagina Web</label><br>
                                <input type="text" id="web" name="web" class="txtForm"><br>
                                <hr>

                                <select class="form-select" id="classifications" name="classifications[]">  
                                    @foreach($classifications as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>

                                <button type="submit" class="btnRegistrar">Registrarse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>
=======
<div class="container">
    <div class="card-empresa">
        <img class="logo-visitados" src="{{asset('images/logoStand.png')}}" alt="">
        <div class="card-header">
            <h1>Crear Stands</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('stand.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Nombre Stand</label>
                    <input type="text" id="input-empresa" name="name" require>
                </div>

                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Logo URL</label>
                    <input type="file" id="input-empresa" name="logo" accept="image/*" require>
                </div>

                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Banner URL</label>
                    <input type="file" id="input-empresa" name="banner" accept="image/*" require>
                </div>

                <div class="form-floating">
                    <textarea id="input-empresa" placeholder="Descripción" name="description" style="height: 100px"
                        required></textarea>
                </div>

                <div class="input-group mb-3 mt-3">
                    <label for="floatingInput" class="label">Facebook</label>
                    <input type="text" id="input-empresa" name="facebook" require>
                </div>

                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Instagram</label>
                    <input type="text" id="input-empresa" name="instagram" require>
                </div>

                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">TikTok</label>
                    <input type="text" id="input-empresa" name="tiktok" require>
                </div>

                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Sitio web</label>
                    <input type="text" id="input-empresa" name="web" require>
                </div>

                <select id="input-empresa" name="classifications[]">
                    @foreach($classifications as $class)
                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                    @endforeach
                </select>
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-primary mt-3" id="btn">Enviar</button>
                        <a href="{{route('stand.index')}}" class="btn btn-primary mt-3" id="btn">Volver</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe

@endsection