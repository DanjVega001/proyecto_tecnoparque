@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Crear Stands</h1>
        </div>
        <div class="card-body">
        <form action="{{ route('stand.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="input-group mb-3">
                <span class="input-group-text">Nombre</span>
                <input type="text" class="form-control" name="name" require>
        </div>
        
        <div class="input-group mb-3">
                <span class="input-group-text">Logo URL</span>
                <input type="file" class="form-control" name="logo" accept="image/*" require>
            </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Banner URL</span>
            <input type="file" class="form-control" name="banner" accept="image/*" require>
        </div>

        <div class="form-floating">
                    <textarea class="form-control" placeholder="Feedback" name="description" style="height: 100px" required></textarea>
                    <label for="floatingTextarea2">Descripción</label>
        </div>

        <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Facebook</span>
                <input type="text" class="form-control" name="facebook" require>
        </div>

        <div class="input-group mb-3">
                <span class="input-group-text">Instagram</span>
                <input type="text" class="form-control" name="instagram" require>
        </div>

        <div class="input-group mb-3">
                <span class="input-group-text">TikTok</span>
                <input type="text" class="form-control" name="tiktok" require>
        </div>

        <!-- Campo para la página web -->
        <div class="input-group mb-3">
                <span class="input-group-text">Sitio web</span>
                <input type="text" class="form-control" name="web" require>
        </div>

        <select class="form-select" id="classifications" name="classifications[]">  
            @foreach($classifications as $class)
                <option value="{{ $class->id }}">{{ $class->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        <a href="{{route('stand.index')}}" class="btn btn-primary mt-3" >Volver</a>
    </form>
        </div>
    </div>
</div>

@endsection