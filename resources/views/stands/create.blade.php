<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('stand.store') }}" method="POST">
        @csrf
        <!-- Campo para el nombre -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" required>
        <br>

        <!-- Campo para el logo -->
        <label for="logo">Logo URL:</label>
        <input type="text" name="logo" required>
        <br>

        <!-- Campo para el banner -->
        <label for="banner">Banner URL:</label>
        <input type="text" name="banner" required>
        <br>

        <!-- Campo para la descripción -->
        <label for="description">Descripción:</label>
        <textarea name="description" rows="4" required></textarea>
        <br>

        <!-- Campos para redes sociales -->
        <label for="facebook">Facebook:</label>
        <input type="text" name="facebook">
        <br>

        <label for="instagram">Instagram:</label>
        <input type="text" name="instagram">
        <br>

        <label for="tiktok">TikTok:</label>
        <input type="text" name="tiktok">
        <br>

        <!-- Campo para la página web -->
        <label for="web">Sitio web:</label>
        <input type="text" name="web">
        <br>

        <!-- Campo para la calificación -->
        <label for="calification">Calificación:</label>
        <input type="number" name="calification" step="0.1" required>
        <br>

        <!-- Botón de envío -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>