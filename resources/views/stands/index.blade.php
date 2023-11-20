<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stands</title>
</head>
<body>
<a href="{{route('stand.create')}}" class="btn btn-primary">Crear stand</a>
@foreach ($stands as $stand)
    <p>{{$stand}}</p>
    <a href="{{ route('stand.edit', ['stand' => $stand->id ])  }}">Editar</a>
    <form action="{{ route('stand.destroy', ['stand' => $stand->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta empresa?');">
    @csrf
    @method('DELETE') 

    <button type="submit">Eliminar</button>
</form>
@endforeach
</body>
</html>