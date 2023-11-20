@extends('layouts.perfil')
@section('content')
<div class="container">
    <h2>Evaluar Stand</h2>

    <form action="{{ route('guardar_evaluacion') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="reseña">Reseña:</label>
            <textarea class="form-control" id="reseña" name="reseña" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="calificación">Calificación:</label>
            <select class="form-select" id="calificación" name="calificación">
                <option value="1">1 estrella</option>
                <option value="2">2 estrellas</option>
                <option value="3">3 estrellas</option>
                <option value="4">4 estrellas</option>
                <option value="5">5 estrellas</option>
            </select>
        </div>

        <div class="mb-3">
            <p>Preguntas relacionadas con la evaluación:</p>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="pregunta1" id="pregunta1">
                <label class="form-check-label" for="pregunta1">Pregunta 1</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="pregunta2" id="pregunta2">
                <label class="form-check-label" for="pregunta2">Pregunta 2</label>
            </div>

            <!-- Agrega más preguntas según sea necesario -->
        </div>

        <button type="submit" class="btn btn-primary">Enviar Evaluación</button>
    </form>
</div>
@endsection
