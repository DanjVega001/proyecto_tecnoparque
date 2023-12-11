@extends('layouts.app')

@section('content')
<div class="container-fluid" id="container-login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="card-login">
            <label for="titulo" class="col-md-4 m-auto">Inicio de sesión</label>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="form">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12 d-flex justify-content-center text-center">
                                <img src="{{ asset('images/logo-login.png') }}" alt="Logo" height="100px">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Correo Electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 d-flex justify-content-center text-center ">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="link" >
                                    ¿Haz olvidado tu contraseña?
                                </a>
                                @endif
                            </div>
                        </div>

                        <!--<div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="row mb-3 d-flex justify-content-center text-center">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary" id="btn">
                                    {{ __('Ingresar') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mb-0 d-flex justify-content-center text-center">
                            <div class="col-md-12" >
                                <button type="submit" class="btn btn-primary" id="btn">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                        <div class="card mt-3" id="card-google">
                            <div class="row mt-2 d-flex justify-content-center text-center">
                                <div class="col-md-12" >
                                    <a id="link-google" href="{{route('login-google')}}"> 
                                        <img src="{{ asset('images/logo-google.png') }}" alt="" height="30px">
                                        <p>Ingreso con Gmail</p>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>                       
                    </form>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label for="password" style="color: #5e1325;">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required autocomplete="current-password">
        </div>
        <h6 style="color: #5e1325;">¿Haz olvidado la contraseña?</h6>
        <button type="submit" class="btn btn-primary btn-block mt-3">Ingresar</button>
        <a href="{{ route('register') }}" class="btn btn-primary btn-block mt-2">Registrar</a>      
      </form>
    </div>
    <!-- Footer -->
    <footer class="text-center">
  <!-- Agregamos el icono de Google de Font Awesome -->

  <a href="{{ url('/login-google') }}">
    <!-- Imagen de Google con el enlace -->
    <img src="{{ asset('img/stands/LogoGoogle.png') }}" class="mb-3" style="max-width: 15%;">
  </a>
  <!-- Estilos actualizados para el botón de Google -->
  <button type="button" class="btn btn-primary btn-block btn-google" onclick="window.location.href='{{ url('/login-google') }}'">Iniciar sesión con Google</button>
</footer>
  </div>

  <!-- Agregamos el script de Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>