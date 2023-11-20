<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
<div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Editar Visitantes</h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('places.update',$place->id)}}">
                @method('PUT')
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombre</span>
                    <input type="text" class="form-control" name="name" value="{{$place->name}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Email</span>
                    <input type="text" class="form-control" name="email" value="{{$place->email}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Dirección</span>
                    <input type="text" class="form-control" name="address" value="{{$place->address}}" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Fecha de nacimiento</span>
                    <input type="text" class="form-control" name="latitude" value="{{$place->latitude}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Genero</span>
                    <input type="text" class="form-control" name="length" value="{{$place->length}}">
                </div>
                <select class="form-select"  name="schedule_id" required placeholder="Seleccione un Horario">
                    @foreach($schedules as $schedule)
                    <option value='{{$schedule -> id}}'>{{$schedule->hour_start}} - {{$schedule->hour_end}}</option>
                    @endforeach    
                </select>
                <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{route('places.index')}}" class="btn btn-danger">Volver</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>