<div>
    <h4>Bienvenido, {{ Auth::user()->name }}!</h4>
    <p>Aquí encontrarás opciones para gestionar empresas y configuraciones del sistema.</p>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Gestionar Empresas</h5>
            <p class="card-text">Añade, edita o elimina empresas registradas en la aplicación.</p>
            <a href="{{ route('empresa.index') }}" class="btn btn-primary">Ir a Empresas</a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Gestionar Lugares</h5>
            <p class="card-text">Añade, edita o elimina lugares disponibles en la aplicación.</p>
            <a href="{{ route('places.index') }}" class="btn btn-primary">Ir a Lugares</a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Gestionar Horarios</h5>
            <p class="card-text">Configura los horarios disponibles para los eventos.</p>
            <a href="{{ route('schedule.index') }}" class="btn btn-primary">Ir a Horarios</a>
        </div>
    </div>
</div>
