<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion</title>
</head>
<body>
    <form action="{{ route('evaluation.store', ['qr_code' => $qr_code]) }}" method="POST">
        @csrf
        
        @foreach($criterios as $criterio)
        <label>Pregunta: {{ $criterio->name }}</label>
        <input type="hidden" name="criterio_id" value="{{$criterio->id}}">
        <input type="number" name="criterios" required>
        <br>
        @endforeach
        <label for="feedback">Feedback</label>
        <textarea name="feedback" id="feedback" cols="30" rows="10"></textarea>
        <!-- Botón de envío -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>