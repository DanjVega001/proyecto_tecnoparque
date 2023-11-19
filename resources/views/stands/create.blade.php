<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('stand.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Campo para el nombre -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" required>
        <br>

        <!-- Campo para el logo -->
        <label for="logo">Selecciona una imagen:</label>
        <input type="file" name="logo" accept="image/*">
        <br>

        <!-- Campo para el banner -->
        <label for="banner">Selecciona una imagen:</label>
        <input type="file" name="banner" accept="image/*">
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

        <select id="classifications" name="classifications[]" multiple>  
            @foreach($classifications as $class)
                <option value="{{ $class->id }}">{{ $class->name }}</option>
            @endforeach
        </select>
        
        <!-- Botón de envío -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>