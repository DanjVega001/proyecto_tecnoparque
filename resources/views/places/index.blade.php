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
                            <th scope="col">Hora Apertura</th>
                            <th scope="col">Hora Cierre</th>

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
                            <td>{{$place->schedule->hour_start}}</td>
                            <td>{{$place->schedule->hour_end}}</td>
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
</body>
</html>