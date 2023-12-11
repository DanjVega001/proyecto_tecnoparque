@extends('layouts.app')

@section('content')

<<<<<<< HEAD
    <div class="container">
    @include('components.header')
        <div class="card">
            <div class="card-header">
                <h1>Editar Horarios</h1>
            </div>
=======
<div class="container">
    <div class="card-empresa">
        <img class="logo-evaluation" src="{{asset('images/logoUser.png')}}" alt="">
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe

        <div class="card-header align-items-center text-center">
            <h1>Crear Horarios</h1>
        </div>

        <div class="card-body">
            <form method="post" action="{{route('schedule.store')}}">
                @csrf
                <select id="input-empresa" name="day" required>
                    <option value="" disabled selected>Horarios</option>
                    <option value='Horario Regular'>
                        Horario Regular
                    </option>
                    <option value='Fin de Semana'>
                        Horario Extendido
                    </option>
                </select>
                <div class="input-group mt-3 mb-3">
                    <label for="floatingInput" class="label">Hora de Inicio</label>
                    <input type="time" id="input-empresa" name="hour_start" value="08:00:00"
                        required>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Hora de Cierre</label>
                    <input type="time" id="input-empresa" name="hour_end" value="20:00:00"
                        required>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-primary" id="btn">Guardar</button>
                        <a href="{{route('schedule.index')}}" class="btn btn-danger" id="btn">Volver</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection