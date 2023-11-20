<!-- resources/views/components/landing.blade.php -->
@extends('layouts.app')

@section('content')
   
    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade " data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselBasicExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100"
                    alt="Sunset Over the City" />
                <div class="carousel-caption d-none d-md-block">
                  <button class="btn btn-primary btn-lg position-absolute  translate-middle">Iniciar Sesión</button>
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100"
                    alt="Canyon at Nigh" />
                    <div class="carousel-caption d-none d-md-block">
                      <button class="btn btn-primary btn-lg position-absolute  translate-middle">Iniciar Sesión</button>
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100"
                    alt="Cliff Above a Stormy Sea" />
                    <div class="carousel-caption d-none d-md-block">
                      <button class="btn btn-primary btn-lg position-absolute  translate-middle">Iniciar Sesión</button>
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBasicExample"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBasicExample"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->
{{-- Aliados --}}
<div class="container mt-5">
    <h2 class="text-center mb-4">Aliados</h2>
    <div class="row row-cols-1 row-cols-sm-2"> {{-- Cambiado a row-cols-sm-2 para que haya 2 columnas en pantallas pequeñas --}}
        {{-- Aliado 1 --}}
        <div class="col mb-4">
            <div class="card">
                <img src="{{ asset('img/afiliados/Senalogo.png') }}" class="card-img-top" alt="Aliado 1">
                <div class="card-body"> {{-- Agregado contenedor de cuerpo de la tarjeta --}}
                    {{-- Puedes agregar más contenido aquí si es necesario --}}
                </div>
            </div>
        </div>

        {{-- Aliado 2 --}}
        <div class="col mb-4">
            <div class="card">
                <img src="{{ asset('img/afiliados/Logo_de_las_Unidades_Tecnológicas_de_Santander.svg.png') }}" class="card-img-top" alt="Aliado 2">
                <div class="card-body"> {{-- Agregado contenedor de cuerpo de la tarjeta --}}
                    {{-- Puedes agregar más contenido aquí si es necesario --}}
                </div>
            </div>
        </div>

        {{-- Aliado 3 --}}
        <div class="col mb-4">
            <div class="card">
                <img src="{{ asset('img/afiliados/LOGO_PLAN_DE_DESARROLLO_COLOMBIA_POTENCIA_DE_LA_VIDA_2022-2026.png') }}" class="card-img-top" alt="Aliado 3">
                <div class="card-body"> {{-- Agregado contenedor de cuerpo de la tarjeta --}}
                    {{-- Puedes agregar más contenido aquí si es necesario --}}
                </div>
            </div>
        </div>

        {{-- Aliado 4 --}}
        <div class="col mb-4">
            <div class="card">
                <img src="{{ asset('img/afiliados/Logo_Ministerio_de_Comercio_Industria_y_Turismo_2022-2026.png') }}" class="card-img-top" alt="Aliado 4">
                <div class="card-body"> {{-- Agregado contenedor de cuerpo de la tarjeta --}}
                    {{-- Puedes agregar más contenido aquí si es necesario --}}
                </div>
            </div>
        </div>

        {{-- Aliado 5 --}}
        <div class="col mb-4">
            <div class="card">
                <img src="{{ asset('img/afiliados/Empodera.png') }}" class="card-img-top" alt="Aliado 5">
                <div class="card-body"> {{-- Agregado contenedor de cuerpo de la tarjeta --}}
                    {{-- Puedes agregar más contenido aquí si es necesario --}}
                </div>
            </div>
        </div>

        {{-- Aliado 6 --}}
        <div class="col mb-4">
            <div class="card">
                <img src="{{ asset('img/afiliados/logo version color 1.png') }}" class="card-img-top" alt="Aliado 6">
                <div class="card-body"> {{-- Agregado contenedor de cuerpo de la tarjeta --}}
                    {{-- Puedes agregar más contenido aquí si es necesario --}}
                </div>
            </div>
        </div>
       
    </div>
</div>





   


@endsection





