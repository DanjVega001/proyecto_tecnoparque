<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro Usuarios</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ICONOS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/forms/registroUser.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- HEADER -->
            <div class="container-fluid ">
                <div class="row headerUp pt-2">
                    <div class="col-4 text-center">
                        <a href="/home"><i class='bx bx-chevron-left'></i></a>
                    </div>
                    <div class="col-4 text-center">
                        <p>REGISTRO USUARIOS</p>
                    </div>
                    <div class="col-4 text-center">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm lineaOsucra">
                        .
                    </div>
                </div>
            </div>
        </div>

<<<<<<< HEAD
        <div class="row">
            <div class="container-fluid">
                <div class="row contenidoForm">
                    <img src="{{ asset('img/stands/logoUser.png') }}" class="logoUser" >
                    <!-- Campos de Registro -->
                    <form method="POST" action="{{ route('register') }}" class="registration-form">
                        @csrf
<<<<<<< HEAD

=======
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card">
            <img src="{{ asset('images/logoUser.png') }}" class="logoUser" >
                <div class="card-header text-center mt-2">
                    <h4>Registro Visitantes</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
                        <div class="row mb-3">
                        <label for="name" class="label-register">Nombre y Apellidos</label>
                            <div class="col-md-12">
                                <input type="text" name="name" class="input-register" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="document" class="label-register">Documento: </label>
                            <div class="col-md-12">
                                <input id="document" type="number" class="input-register" name="document" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="email" class="label-register">Email:</label>
                            <div class="col-md-12">
                                <input  type="email" class="input-register" name="email"  required autocomplete="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone_number" class="label-register">Número de Celular: </label>

                            <div class="col-md-12">
                                <input id="phone_number" type="number" class="input-register" name="phone_number" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="label-register">Dirección: </label>

                            <div class="col-md-12">
                                <input type="text" class="input-register" name="address" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birtday" class="label-register">Fecha de Nacimiento: </label>

                            <div class="col-md-12">
                                <input type="date" class="input-register" name="birthday" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <select required class="input-register mb-2"  name="genere">
                                    <option value="" disabled selected>Seleccione su genero</option>
                                    <option value="F">Femenino</option>
                                    <option value="M">Masculino</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="password" class="label-register">{{ __('Password') }}</label>
                            <div class="col-md-12">
                                <input type="password" class="input-register @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="password-confirm" class="label-register">{{ __('Confirm Password') }}</label>

<<<<<<< HEAD
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="document" class="col-md-4 col-form-label text-md-end">Documento: </label>

                            <div class="col-md-6">
                                <input id="document" type="number" class="form-control" name="document" required>
                                @error('document')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-end">Numero de telefono: </label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control" name="phone_number" required>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
=======
                            <div class="col-md-12">
                            <input id="password-confirm" type="password" class="input-register" name="password_confirmation" required autocomplete="new-password">
>>>>>>> 7daa27c6acaa207c69aec2a1cb78ab55c0380abe
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthday" class="col-md-4 col-form-label text-md-end">Fecha de nacimiento: </label>

                            <div class="col-md-6">
                                <input id="phone_number" type="date" class="form-control" name="birthday" required>
                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">Dirección: </label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">Genero: </label>

                            <div class="col-md-6">
                                <select name="genere" id="genere" class="form-select">
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                </select>
                                @error('genere')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="btn-register" type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
=======
                        <input type="text" placeholder="Nombre y Apellido" name="name" required>
                        <input type="number" placeholder="Documento" name="document" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="number" placeholder="Celular" name="phone_number" required>
                        <input type="text" placeholder="Dirección" name="address" required>
                        <input type="date" placeholder="Fecha de Nacimiento (DD/MM/AAAA)" name="birthdate" required>
                        <select name="gender" required>
                            <option disabled selected>Género</option>
                            <option value="male">Masculino</option>
                            <option value="female">Femenino</option>
                            <option value="other">Otro</option>
                        </select>
                        <input type="password" placeholder="Contraseña" name="password" required>
                        <input type="password" placeholder="Confirmar Contraseña" name="password_confirmation" required>
                        <!-- Botones -->
                        <button type="submit" class="register-button">Registrarse</button>
                        <a href="{{ route('login') }}" class="login-button">Ingresar</a>
>>>>>>> 61b2ea75cc5f9295838a43b090ef7ffa119266fc
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
