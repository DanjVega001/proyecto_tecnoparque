
@extends('layouts.app')
@section('content')
    <div class="container">
    @include('components.header')
        <div class="card">
            <div class="card-header">
                <h1>Lugares Registrados</h1>
            </div>
            <div class="card-body">
                <nav>
                    <a href="{{route('places.create')}}" class="btn btn-success">Crear Nuevo Lugar</a>
                </nav>
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
                            <td>{{$place->schedule->day}}, {{$place->schedule->hour_start}} a {{$place->schedule->hour_end}}
                            </td>
                            <td><a href="{{route('places.edit',$place->id)}}" class="btn btn-primary">Editar</a></td>
                            <form method="post" action="{{route('places.destroy',$place->id)}}">
                                @method('DELETE')
                                @csrf
                                <td scope="row"><button type="submit" class="btn btn-danger">Eliminar</button></td>
                            </form>                         
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

