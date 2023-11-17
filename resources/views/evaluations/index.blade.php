<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion</title>
</head>
<body>
    <form action="{{ route('evaluation.store') }}" method="POST">
        @csrf
        <label for="emprendimiento_favorito">1. Pregunta 1</label>
        <input type="text" name="pregunta_1" required>
        <br>

        <label for="interesante_feria">2. Pregunta 2</label>
        <textarea name="pregunta_2" rows="4" required></textarea>
        <br>

        <label for="mejoras">3. Pregunta 3</label>
        <textarea name="pregunta_3" rows="4" required></textarea>
        <br>

        <!-- Botón de envío -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>