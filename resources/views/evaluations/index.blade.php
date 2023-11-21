<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                Evaluación de Stand
                <div class="input-group mb-3">
                    <h1>Bienvenido - {{ $user->name }} </h1> 
                </div>
            </div>
            <div class="card-body">
            <form action="{{ route('evaluation.store', ['qr_code' => $qr_code]) }}" method="POST">
                @csrf
                @foreach($criterios as $criterio)
                <label>Pregunta {{ $criterio->description }}</label>
                <input type="hidden" name="criterio_id[]" value="{{$criterio->id}}">
                <input type="number" name="puntuacion[]" required>
                <br>
                @endforeach
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Feedback" name="feedback" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Feedback</label>
                </div>
                <!-- Botón de envío -->
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>
            </div>
        </div>
    
    </div>
    
</body>
</html>