@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
        <a href="{{route('stand.create')}}" class="btn btn-primary">Crear stand</a>
        </div>
        <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Tiktok</th>
                    <th>Web</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
        @foreach ($stands as $stand)
                <tr>
                    <td>{{$stand->name}}</td>
                    <td>{{$stand->description}}</td>
                    <td>{{$stand->facebook}}</td>
                    <td>{{$stand->instagram}}</td>
                    <td>{{$stand->tiktok}}</td>
                    <td>{{$stand->web}}</td>
                    <td>{{$stand->calification}}</td>
                    <td>{{$stand->logo}}</td>
                    <td>{{$stand->user->phone_number}}</td>
                    <td>{{$stand->user->name}}</td>

                    <td>
                    <a href="{{ route('stand.edit', ['stand' => $stand->id ])  }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('stand.destroy', ['stand' => $stand->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta empresa?');">
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