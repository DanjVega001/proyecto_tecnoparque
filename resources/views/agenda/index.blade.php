@extends('layouts.app')

@section('content')
    <div class="container">
    @include('components.header')
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
                            <th scope="col">Fecha</th>

                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count($agendas); $i++)
                        <tr>
                            <th scope="row">{{$agendas[$i]->id}}</th>
                            <td>{{$agendas[$i]->place->name}}</td>
                            <td>{{$agendas[$i]->stand->name}}</td>
                            <td>{{$agendas[$i]->place->schedule->day}}, {{$agendas[$i]->place->schedule->hour_start}} a {{$agendas[$i]->place->schedule->hour_end}}</td>
                            
                            <td>{{$dateSta_format[$i]}} {{$agendas[$i]->date_start}} a  {{$dateEnd_format[$i]}} {{$agendas[$i]->date_end}}</td>

                            <td><a href="{{route('agenda.edit',$agendas[$i]->id)}}" class="btn btn-primary">Editar</a></td>
                            <form method="post" action="{{route('agenda.destroy',$agendas[$i]->id)}}">
                                @method('DELETE')
                                @csrf
                                <td scope="row"><button type="submit" class="btn btn-danger">Eliminar</button></td>
                            </form>                         
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection