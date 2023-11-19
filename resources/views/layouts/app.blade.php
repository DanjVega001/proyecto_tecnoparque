<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta etiquetas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Título de la página -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Enlace a los estilos de la aplicación -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fuentes de Google -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <!-- Barra de navegación --> 
        @include('components.Header')
        <!-- Contenido principal -->
        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer -->
        @include('components.Footer')
    </div>
</body>
</html>
