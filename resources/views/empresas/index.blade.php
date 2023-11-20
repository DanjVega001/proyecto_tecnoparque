@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Usuarios - Empresas</h1>
        <a href="{{ route('empresa.create')}}" class="btn btn-primary">Crear empresa</a>
        </div>
        <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                    <th>Nombre Empresa</th>
                    <th>Email</th>
                    <th>Nit</th>
                    <th>Número Teléfonico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($empresas as $empresa)
                <tr>
                    <td>{{ $empresa->name }}</td>
                    <td>{{ $empresa->email }}</td>
                    <td>{{ $empresa->document }}</td>
                    <td>{{ $empresa->phone_number }}</td>
                    <td><a href="{{ route('empresa.edit', ['empresa' => $empresa->id ])}}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('empresa.destroy', ['empresa' => $empresa->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta empresa?');">
                        @csrf
                        @method('DELETE') 
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>  
        </div>
    </div>
</div>
    
@endsection
