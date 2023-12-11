@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <div class="container">
    @include('components.header')
        <div class="card">
            <div class="card-header">
                <h1>Horarios Registrados</h1>
            </div>
            <div class="card-body">
                <nav>
                    <a href="{{route('schedule.create')}}" class="btn btn-success">Crear nuevo horario</a>
                </nav>
=======
<div class="container">
    <div class="card">
        <div class="card-header align-items-center text-center">
            <h1>Horarios Registrados</h1>
            <a href="{{route('schedule.create')}}" class="btn btn-success" id="btn">Crear nuevo horario</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Dia</th>
                            <th scope="col">Hora de Inicio</th>
                            <th scope="col">Hora De Cierre</th>

                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                        <tr>
                            <th scope="row">{{$schedule->id}}</th>
                            <td>{{$schedule->day}}</td>
                            <td>{{$schedule->hour_start}}</td>
                            <td>{{$schedule->hour_end}}</td>

                            <td><a href="{{route('schedule.edit',$schedule->id)}}" class="btn btn-primary"
                                    id="btn-acciones">Editar</a>
                            </td>
                            <!-- <form method="post" action="{{route('schedule.destroy',$schedule->id)}}">
                                @method('DELETE')
                                @csrf
                                <td scope="row"><button type="submit" class="btn btn-danger">Eliminar</button></td>
                            </form> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>

</div>
@endsection