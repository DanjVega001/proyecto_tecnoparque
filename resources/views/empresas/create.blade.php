@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-empresa">
        <img class="logo-evaluation" src="{{asset('images/logoUser.png')}}" alt="">
        <div class="card-header align-items-center text-center">
            <h1>Crear Usario - Empresa</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('empresa.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Nombre Empresa</label>
                    <input type="text" id="input-empresa" name="name" required>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Correo Electronico</label>
                    <input type="email" id="input-empresa" name="email" required>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Contraseña</label>
                    <input type="password" id="input-empresa" name="password" required>
                </div>
                <div class="input-group mb-3">
                    <label for="floatingInput" class="label">Documento</label>
                    <input type="number" id="input-empresa" name="document" required>
                </div>
                <div class="input-group mb-3">
<<<<<<< HEAD
                    <label for="floatingInput" class="label">Numero Telefonico</label>
                    <input type="number" id="input-empresa" name="phone_number" required>
=======
                    <span class="input-group-text">Dirección:</span>
                    <input type="text" class="form-control" name="address" required >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Número de Teléfono</span>
                    <input type="number" class="form-control" name="phone_number" required >
>>>>>>> 22478ccf54187375a42dc8e8fd9aa2f4cbbc6613
                </div>
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-primary" id="btn">Crear Usuario</button>
                        <a href="{{route('empresa.index')}}" class="btn btn-primary" id="btn">Volver</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection