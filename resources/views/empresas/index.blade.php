@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col ">
            <div class="card">
                <div class="card-header align-items-center text-center">
                    <h1>Usuarios - Empresas</h1>
                    <a href="{{ route('empresa.create')}}" class="btn btn-primary" id="btn">Crear empresa</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
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
                                    <td>
<<<<<<< HEAD
                                        <a href="{{ route('empresa.edit', ['empresa' => $empresa->id ])}}"
                                            class="btn btn-primary" id="btn-acciones">Editar</a>
                                    </td>
                                    <form action="{{ route('empresa.destroy', ['empresa' => $empresa->id]) }}"
                                        method="POST"
                                        onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta empresa?');">
                                        @csrf
                                        @method('DELETE')
                                        <td><button type="submit" class="btn btn-danger"
                                                id="btn-acciones">Eliminar</button></td>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

=======
                                        <a href="{{ route('empresa.edit', ['empresa' => $empresa->id ]) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('empresa.destroy', ['empresa' => $empresa->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta empresa?');" class="d-inline">
                                            @csrf
                                            @method('DELETE') 
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No hay empresas registradas.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
>>>>>>> 22478ccf54187375a42dc8e8fd9aa2f4cbbc6613
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
@endsection
=======
@endsection
>>>>>>> 22478ccf54187375a42dc8e8fd9aa2f4cbbc6613
