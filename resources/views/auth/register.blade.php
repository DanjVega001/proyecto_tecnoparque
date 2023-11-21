@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
       <div class="card">
            <div class="card-header">
                <h1>Registro de Visitantes</h1>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('user.store')}}">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text">Nombre y Apellido</span>
                    <input type="text" class="form-control" name="name" required >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Documento</span>
                    <input type="text" class="form-control" name="document" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Email</span>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Numero de celular</span>
                    <input type="text" class="form-control" name="phone" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Dirección</span>
                    <input type="text" class="form-control" name="address" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Fecha de nacimiento</span>
                    <input type="date" class="form-control" name="birthday" required>
                </div>
                <select class="form-select"  name="genere">
                    <option selected>Seleccione su genero</option>
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">Crear Contraseña</span>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Confirmar Contraseña</span>
                    <input type="password" class="form-control" name="password_confirmation" required>
                </div>
                @error('password')
                <div class="alert alert-danger" role="alert">
                    Las contraseñas no coinciden.
                </div>
                @enderror
                <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
