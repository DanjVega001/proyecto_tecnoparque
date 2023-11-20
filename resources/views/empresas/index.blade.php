<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('empresa.create')}}">Agregar</a>
@foreach ($empresas as $empresa)
    <p>{{ $empresa->name }} - {{ $empresa->email }} - {{ $empresa->document }} - {{ $empresa->phone_number }}</p>
    <a href="{{ route('empresa.edit', ['empresa' => $empresa->id ])  }}">Editar</a>
    <form action="{{ route('empresa.destroy', ['empresa' => $empresa->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta empresa?');">
    @csrf
    @method('DELETE') 

    <button type="submit">Eliminar</button>
</form>
@endforeach
</body>
</html>