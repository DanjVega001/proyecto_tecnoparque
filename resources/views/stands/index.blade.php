@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    @include('components.header')

    <div class="card">
        <div class="card-header">
            <a href="{{ route('stand.create') }}" class="btn btn-primary">Crear stand</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Facebook</th>
                            <th>Instagram</th>
                            <th>Tiktok</th>
                            <th>Web</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stands as $stand)
                            <tr>
                                <td>{{$stand->name}}</td>
                                <td>{{$stand->description}}</td>
                                <td>{{$stand->facebook}}</td>
                                <td>{{$stand->instagram}}</td>
                                <td>{{$stand->tiktok}}</td>
                                <td>{{$stand->web}}</td>
                                <td>
                                    <a href="{{ route('stand.edit', ['stand' => $stand->id ]) }}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('stand.destroy', ['stand' => $stand->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta empresa?');">
                                        @csrf
                                        @method('DELETE') 
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
=======
<div class="container " id="container-stand">
    @auth
    @php
    $mostrarBoton = \Auth::user()->hasRole('Empresa');
    @endphp
    @if($mostrarBoton)
    <div class="card-header text-center">
        <a href="{{route('stand.create')}}" class="btn btn-primary" id="btn">Crear stand</a>
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
    </div>
    @endif
    @endauth
    <div class="row mb-5">
        @foreach ($stands as $stand)
        <div class="col-md-4 mb-5">
            <div class="card" id="card-stand">
                <img class="logoStand" src="{{$stand->logo}}" alt="{{$stand->name}}">
                <div class="calificacion">
                    @php
                    $calification = $stand->calification; // Obtener la calificación del stand
                    @endphp
                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$calification) <!-- Rellenar la estrella si $i es menor o
                        igual a $calification -->
                        <label class="estrella-rellena" for="estrella{{$stand->id}}{{$i}}">&#9733;</label>
                        @else
                        <!-- Mostrar una estrella vacía si $i es mayor que $calification -->
                        <label class="estrella-vacia" for="estrella{{$stand->id}}{{$i}}">&#9734;</label>
                        @endif
                        @endfor
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label-stand">Nombre Empresa</label>
                    <input type="text" id="input-stand" name="name" value="{{$stand->name}}" readonly>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label-stand">Dirección</label>
                    <input type="text" id="input-stand" name="direccion" value="{{$stand->user->address}}" readonly>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label-stand">Número Telefonico</label>
                    <input type="email" id="input-stand" name="email" value="{{$stand->user->phone_number}}" readonly>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label-stand">Descripción</label>
                    <input type="email" id="input-stand" name="email" value="{{$stand->description}}" readonly>
                </div>
                <div class="input-group mb-3 justify-content-center">
                    <a href="{{$stand->web}}">{{$stand->web}}</a>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a class="link-icono" href="{{$stand->facebook}}" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-facebook me-3" id="icono-red-social"></i>
                        </a>
                        <a class="link-icono" href="{{$stand->instagram}}" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-instagram me-3" id="icono-red-social"></i>
                        </a>
                        <a class="link-icono" href="{{$stand->tiktok}}" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-tiktok" id="icono-red-social"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</div>
<<<<<<< HEAD
@endsection
=======


@endsection
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
