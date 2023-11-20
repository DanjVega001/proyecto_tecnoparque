@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Editar Stand</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('stand.update', ['stand' => $stand->id] ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <span class="input-group-text">Nombre</span>
                <input type="text" class="form-control" name="name" value="{{$stand->name}}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Logo URL</span>
                <input type="text" class="form-control" name="logo" value="{{$stand->logo}}">
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text">Logo URL</span>
                <input type="text" class="form-control" name="banner" value="{{$stand->banner}}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Descripción</span>
                <input type="text" class="form-control" name="description" value="{{$stand->description}}">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Descripción</span>
                <input type="text" class="form-control" name="facebook" value="{{$stand->facebook}}">
            </div>

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
        </div>
    </div>
</div>

@endsection