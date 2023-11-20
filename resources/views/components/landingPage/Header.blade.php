<!-- resources/views/components/Header.blade.php -->

<header>
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Feria Logo">
    </div>
    
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/stands">Stands</a></li>
            <li><a href="/sponsors">Patrocinadores</a></li>
            <li><a href="/about">Acerca de</a></li>
            <!-- Agrega más elementos de menú según sea necesario -->
        </ul>
    </nav>

    <div class="event-info">
        <p>Fecha: 10-15 de diciembre de 2023</p>
        <p>Lugar: Centro de Convenciones</p>
        <!-- Agrega más información relevante sobre el evento -->
    </div>
</header>
