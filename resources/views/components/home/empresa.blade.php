<div class="">
    <h4>Bienvenido, {{ Auth::user()->name }}!</h4>
    <p>Aquí encontrarás opciones para gestionar stands y eventos.</p>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Gestionar Stands</h5>
            <p class="card-text">Añade, edita o elimina stands para tu empresa.</p>
            <a href="{{ route('stand.index') }}" class="btn btn-primary">Ir a Stands</a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Gestionar Agenda</h5>
            <p class="card-text">Configura la agenda de eventos para tu empresa.</p>
            <a href="{{ route('agenda.index') }}" class="btn btn-primary">Ir a Agenda</a>
        </div>
    </div>
</div>
