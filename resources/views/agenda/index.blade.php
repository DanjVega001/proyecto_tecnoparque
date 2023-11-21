@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Agendas Registradas</h1>
            </div>
            <div class="card-body">
                <nav>
                    <a href="{{route('agenda.create')}}" class="btn btn-success">Crear Nueva Agenda</a>
                </nav>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Lugar</th>
                            <th scope="col">Stand</th>
                            <th scope="col">Horario</th>

                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agendas as $agenda)
                        <tr>
                            <th scope="row">{{$agenda->id}}</th>
                            <td>{{$agenda->place->name}}</td>
                            <td>{{$agenda->stand->name}}</td>
                            <td>{{$agenda->place->schedule->weekday}}, {{$agenda->place->schedule->hour_start}} a {{$agenda->place->schedule->hour_end}}</td>
                            <td><a href="{{route('agenda.edit',$agenda->id)}}" class="btn btn-primary">Editar</a></td>
                            <form method="post" action="{{route('agenda.destroy',$agenda->id)}}">
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