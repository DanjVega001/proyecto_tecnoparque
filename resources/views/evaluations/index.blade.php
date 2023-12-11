@extends('layouts.app')

@section('content')
<<<<<<< HEAD

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
        <!-- STYLES -->
        <link href="{{ asset('css/forms/registroStands.css') }}" rel="stylesheet">

    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <!-- HEADER -->
            <div class="container-fluid">
                <div class="row headerUp pt-2">
                    <div class="col-4 text-center">
                        <a href="/home"><i class='bx bx-chevron-left'></i></a>
                    </div>
                    <div class="col-4 text-center">
                        <p>Evaluación de Stand</p>
                    </div>
                    <div class="col-4 text-center">
                        {{-- <i class='bx bx-dots-vertical-rounded'></i> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm lineaOsucra">
                        .
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="container-fluid contenidoForm">
                <div class="row justify-content-center align-items-center vh-100">
                    <div class="col">
                        <form action="{{ route('evaluation.store', ['qr_code' => $qr_code]) }}" method="POST">
                            @csrf
                            @foreach($criterios as $criterio)
                                <label class="pregunta">Pregunta {{ $criterio->description }}</label>
                                <input type="hidden" name="criterio_id[]" value="{{ $criterio->id }}">
                                <!-- Lista desplegable del 1 al 5 -->
                                <div class="mt-2 mb-4"> <!-- Agregamos la clase text-center para centrar el contenido -->
                                    <select name="puntuacion[]" class="form-select w-25 mx-auto" required> <!-- Agregamos la clase form-select de Bootstrap -->
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            @endforeach
                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Feedback" name="feedback" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Feedback</label>
                            </div>
                            <button type="submit" class="btnRegistrar mt-3">Enviar</button>
                        </form>
                    </div>
                </div>
=======
    <div class="container">
        <div class="card-evaluation mt-3">
            <img class="logo-evaluation" src="{{asset('images/logoUser.png')}}" alt="">
            <div class="card-header">
                Evaluación de Stand
                <div class="input-group mb-3">
                    <!--<h1>Bienvenido - {{ $user->name }} </h1> -->
                </div>
            </div>
            <div class="card-body">
            <form action="{{ route('evaluation.store', ['qr_code' => $qr_code]) }}" method="POST">
                @csrf
                @foreach($criterios as $criterio)
                <div class="card mb-3 p-3">
                    <label>Pregunta {{ $criterio->description }}</label>
                    <input type="hidden" name="criterio_id[]" value="{{$criterio->id}}">
                    <input class="form-control" type="number" name="puntuacion[]" required>
                </div>
                @endforeach
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Feedback" name="feedback" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Feedback</label>
                </div>
                <button id="btn" type="submit" class="btn btn-primary m-3">Enviar</button>
            </form>
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
            </div>
        </div>
    </div>
    </body>
</html>
    
@endsection
