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
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


@endsection





