@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
        <div class="card-header">
            <h1>Usuarios Registrados</h1>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->document}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>{{$user->genere}}</td>
                        <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-primary">Editar</a></td>
                        <form method="post" action="{{route('user.destroy',$user->id)}}">
                            @method('DELETE')
                            @csrf
                            <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                        </form>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        
    </div>
    @endsection