@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Editar Horarios</h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('schedule.update',$schedule->id)}}">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">Dia</span>
                    <input type="text" class="form-control" name="weekday" value="{{$schedule->weekday}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Hora de Inicio</span>
                    <input type="time" class="form-control" name="hour_start">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Hora de Cierre</span>
                    <input type="time" class="form-control" name="hour_end" >
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{route('schedule.index')}}" class="btn btn-danger">Volver</a>
                </form>
            </div>
        </div>
    </div>
@endsection