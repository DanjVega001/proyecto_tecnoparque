@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Editar Agenda</h1>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Lugar</th>
                            <th scope="col">Stand</th>
                            <th scope="col">Horario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$agenda->place->name}}</td>
                            <td>{{$agenda->stand->name}}</td>
                            <td>{{$agenda->place->schedule->weekday}}, {{$agenda->place->schedule->hour_start}} a {{$agenda->place->schedule->hour_end}}</td>
                        </tr>
                    </tbody>
                </table>
                <form method="post" action="{{route('agenda.store')}}">
                    @csrf
                    <span class="input-group-text">Seleccione el Lugar de Presentacion</span>
                    <select class="form-select"  name="place_id" required>
                        @foreach($places as $place)
                            <option value='{{$place-> id}}'>{{$place->name}}, {{$place->schedule->hour_start}}  -  {{$place->schedule->hour_end}}</option>
                        @endforeach    
                    </select>
                    <br>
                    <span class="input-group-text">Seleccione el Stand</span>
                    <select class="form-select"  name="stand_id" required>
                        @foreach($stands as $stand)
                            <option value='{{$stand-> id}}' @if($stand->id == $agenda->stand->id) selected @endif>
                                {{$stand->name}}
                            </option>
                        @endforeach    
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                    <a href="{{route('agenda.index')}}" class="btn btn-danger">Volver</a>
                </form>
            </div>
        </div>
    </div>
@endsection