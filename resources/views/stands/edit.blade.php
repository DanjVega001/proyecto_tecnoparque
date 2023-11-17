<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('stand.update', ['stand' => $stand->id] ) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Campos para los datos del formulario -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ $stand->name }}" required>
        <br>

        <label for="logo">Logo URL:</label>
        <input type="text" name="logo" value="{{ $stand->logo }}" required>
        <br>

        <label for="banner">Banner URL:</label>
        <input type="text" name="banner" value="{{ $stand->banner }}" required>
        <br>

        <label for="description">Descripción:</label>
        <textarea name="description" rows="4" required>{{ $stand->description }}</textarea>
        <br>

        <label for="facebook">Facebook:</label>
        <input type="text" name="facebook" value="{{ $stand->facebook }}">
        <br>

        <label for="instagram">Instagram:</label>
        <input type="text" name="instagram" value="{{ $stand->instagram }}">
        <br>

        <label for="tiktok">TikTok:</label>
        <input type="text" name="tiktok" value="{{ $stand->tiktok }}">
        <br>

        <label for="web">Sitio web:</label>
        <input type="text" name="web" value="{{ $stand->web }}">
        <br>

        <label for="calification">Calificación:</label>
        <input type="number" name="calification" step="0.1" value="{{ $stand->calification }}" required>
        <br>

        <!-- Botón de envío -->
        <button type="submit">Actualizar</button>
    </form>
    </form>
</body>
</html>