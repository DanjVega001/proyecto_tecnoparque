<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #942339;
      color: white;
    }
    .login-box {
      max-width: 400px;
      margin: auto;
      padding: 20px;
      border-radius: 10px;
      background-color: white;
      margin-top: 50px;
      color: #5e1325; /* Color gris para el texto */
    }
    .form-control, .btn {
      border-radius: 20px;
    }
    .btn-primary {
      background-color: #5e1325;
      border-color: #5e1325;
    }
    /* Estilos para el footer */
    footer {
      background-color: #5e1325; /* Color del footer */
      border-radius: 20px; /* Esquinas redondeadas */
      padding: 20px;
      margin-top: 50px;
      box-shadow: 0px -5px 15px 0px rgba(0,0,0,0.75); /* Sombra respecto al fondo */
    }
    footer .btn-google {
      margin-top: 10px; /* Espacio entre el botón y el borde superior del footer */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <div class="text-center">
        <img src="{{ asset('img/stands/LOGO.jpg') }}" class="mb-3" >
        <h2>Inicio de Sesión</h2>
      </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
          <label for="email" style="color: #5e1325;">Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        <div class="form-group">
          <label for="password" style="color: #5e1325;">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required autocomplete="current-password">
        </div>
        <h6 style="color: #5e1325;">¿Haz olvidado la contraseña?</h6>
        <button type="submit" class="btn btn-primary btn-block mt-3">Ingresar</button>
      </form>
      <a href="{{ route('register') }}" class="btn btn-primary btn-block mt-2">Registrar</a>
      <hr>
    </div>
    <!-- Footer -->
    <footer class="text-center">
      <button type="button" class="btn btn-primary btn-block btn-google" onclick="window.location.href='{{ url('/login-google') }}'">Ingreso con Google</button>
    </footer>
  </div>
</body>
</html>