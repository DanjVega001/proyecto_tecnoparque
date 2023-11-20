<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Visitantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Registro de Lugares</h1>
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
                <form method="post" action="{{route('places.store')}}">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text">Nombre</span>
                        <input type="text" class="form-control" name="name" required >
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email</span>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dirección</span>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Latitud</span>
                        <input type="text" class="form-control" name="latitude" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Longitud</span>
                        <input type="text" class="form-control" name="length" required>
                    </div>
                    <span class="input-group-text">Seleccione un Horario</span>
                    <select class="form-select"  name="schedule_id" required placeholder="Seleccione un Horario">
                        @foreach($schedules as $schedule)
                            <option value='{{$schedule -> id}}'>{{$schedule->hour_start}} - {{$schedule->hour_end}}</option>
                        @endforeach    
                    </select>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>