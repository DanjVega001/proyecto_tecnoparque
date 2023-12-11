@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container">
        @include('components.header')

        <div class="card">
            <div class="card-header">
                <h1 class="mb-0">Lugares Registrados</h1>
                <a href="{{ route('places.create') }}" class="btn btn-success">Crear Nuevo Lugar</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Latitud</th>
                                <th scope="col">Longitud</th>
                                <th scope="col">Horario</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($places as $place)
                                <tr>
                                    <th scope="row">{{ $place->id }}</th>
                                    <td>{{ $place->name }}</td>
                                    <td>{{ $place->email }}</td>
                                    <td>{{ $place->address }}</td>
                                    <td>{{ $place->latitude }}</td>
                                    <td>{{ $place->length }}</td>
                                    <td>{{ $place->schedule->day }}, {{ $place->schedule->hour_start }} a {{ $place->schedule->hour_end }}</td>
                                    <td>
                                        <a href="{{ route('places.edit', $place->id) }}" class="btn btn-primary">Editar</a>
                                        <form method="post" action="{{ route('places.destroy', $place->id) }}" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este lugar?');" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
=======
<div class="container">
    <div class="card">
        <div class="card-header align-items-center text-center">
            <h1>Lugares Registrados</h1>
            <a href="{{route('places.create')}}" class="btn btn-success" id="btn">Crear Nuevo Lugar</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Latitud</th>
                            <th scope="col">Longitud</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($places as $place)
                        <tr>
                            <th scope="row">{{$place->id}}</th>
                            <td>{{$place->name}}</td>
                            <td>{{$place->email}}</td>
                            <td>{{$place->address}}</td>
                            <td>{{$place->latitude}}</td>
                            <td>{{$place->length}}</td>
                            <td>{{$place->schedule->day}}, {{$place->schedule->hour_start}} a
                                {{$place->schedule->hour_end}}
                            </td>
                            <td><a href="{{route('places.edit',$place->id)}}" class="btn btn-primary"
                                    id="btn-acciones">Editar</a></td>
                            <form method="post" action="{{route('places.destroy',$place->id)}}">
                                @method('DELETE')
                                @csrf
                                <td scope="row"><button type="submit" class="btn btn-danger"
                                        id="btn-acciones">Eliminar</button></td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
            </div>

        </div>
    </div>
<<<<<<< HEAD
@endsection
=======
</div>
@endsection
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
