<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    @include('components.Header')

    <div class="container">
        <!-- Carrusel de imágenes -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" alt="Banner 2">
                </div>
                <!-- Agrega más elementos al carrusel según sea necesario -->
            </div>
        </div>

        <!-- Tarjetas de información -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/card1.jpg') }}" class="card-img-top" alt="Card 1">
                    <div class="card-body">
                        <h5 class="card-title">Actividad 1</h5>
                        <p class="card-text">Información sobre la actividad 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/card2.jpg') }}" class="card-img-top" alt="Card 2">
                    <div class="card-body">
                        <h5 class="card-title">Actividad 2</h5>
                        <p class="card-text">Información sobre la actividad 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/card3.jpg') }}" class="card-img-top" alt="Card 3">
                    <div class="card-body">
                        <h5 class="card-title">Actividad 3</h5>
                        <p class="card-text">Información sobre la actividad 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.Footer')
@endsection
