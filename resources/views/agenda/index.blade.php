@extends('layouts.app')

@section('content')
    <div class="container">
        @include('components.header')

        <div class="card">
<<<<<<< HEAD
            <div class="card-header">
                <h1 class="mb-0">Agendas Registradas</h1>
            </div>
            <div class="card-body">
                <nav class="mb-3">
                    <a href="{{ route('agenda.create') }}" class="btn btn-success">Crear Nueva Agenda</a>
                </nav>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lugar</th>
                                <th scope="col">Stand</th>
                                <th scope="col">Horario</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($agendas as $agenda)
                                <tr>
                                    <th scope="row">{{ $agenda->id }}</th>
                                    <td>{{ $agenda->place->name }}</td>
                                    <td>{{ $agenda->stand->name }}</td>
                                    <td>{{ $agenda->place->schedule->day }}, {{ $agenda->place->schedule->hour_start }} a {{ $agenda->place->schedule->hour_end }}</td>
                                    <td>{{ $dateSta_format[$loop->index] }} {{ $agenda->date_start }} a {{ $dateEnd_format[$loop->index] }} {{ $agenda->date_end }}</td>
                                    <td>
                                        <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-primary">Editar</a>
                                        <form method="post" action="{{ route('agenda.destroy', $agenda->id) }}" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta agenda?')">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No hay agendas registradas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
=======
            <div class="card-header text-center">
                <h1>Agendas Registradas</h1>
                <a href="{{route('agenda.create')}}" class="btn btn-success" id="btn">Crear Nueva Agenda</a>
            </div>
            <div class="card-body">
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

                            <td><a href="{{route('agenda.edit',$agendas[$i]->id)}}" class="btn btn-primary" id="btn-acciones">Editar</a></td>
                            <form method="post" action="{{route('agenda.destroy',$agendas[$i]->id)}}">
                                @method('DELETE')
                                @csrf
                                <td scope="row"><button type="submit" class="btn btn-danger" id="btn-acciones">Eliminar</button></td>
                            </form>                         
                        </tr>
                        @endfor
                    </tbody>
                </table>
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
            </div>
        </div>
    </div>
@endsection
