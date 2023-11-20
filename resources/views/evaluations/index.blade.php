@extends('layouts.app')

@section('content')
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
                <label>Pregunta: {{ $criterio->name }}</label>
                <input type="hidden" name="criterio_id[]" value="{{$criterio->id}}">
                <input type="number" name="puntuacion[]" required>
                <br>
                @endforeach
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Feedback" name="feedback" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Feedback</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>
            </div>
        </div>
    
    </div>
@endsection