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

        <div class="row">
            <div class="container-fluid">
                <div class="row contenidoForm">
                    <img src="{{ asset('img/stands/logoUser.png') }}" class="logoUser" >
                    <!-- Campos de Registro -->
                    <form method="POST" action="{{ route('register') }}" class="registration-form">
                        @csrf
<<<<<<< HEAD

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

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
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
