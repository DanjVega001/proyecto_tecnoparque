<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- empresas/edit.blade.php -->

<form action="{{ route('empresa.update', $empresa->id) }}" method="POST">
    @csrf
    @method('PUT') 

    <label for="name">Nombre:</label>
    <input type="text" name="name" value="{{ $empresa->name }}" required>
    <br>

    <label for="email">Correo Electrónico:</label>
    <input type="email" name="email" value="{{ $empresa->email }}" required>
    <br>

    <label for="document">Documento:</label>
    <input type="text" name="document" value="{{ $empresa->document }}" required>
    <br>

    <label for="phone_number">Número de Teléfono:</label>
    <input type="text" name="phone_number" value="{{ $empresa->phone_number }}" required>
    <br>

    <button type="submit">Actualizar Usuario</button>
</form>

</body>
</html>