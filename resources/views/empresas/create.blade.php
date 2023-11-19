<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- users/create.blade.php -->

<form action="{{ route('empresa.store') }}" method="POST">
    @csrf

    <label for="name">Nombre:</label>
    <input type="text" name="name" required>
    <br>

    <label for="email">Correo Electrónico:</label>
    <input type="email" name="email" required>
    <br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" required>
    <br>

    <label for="document">Documento:</label>
    <input type="number" name="document" required>
    <br>

    <label for="phone_number">Número de Teléfono:</label>
    <input type="number" name="phone_number" required>
    <br>

    <button type="submit">Crear Usuario</button>
</form>
</body>
</html>