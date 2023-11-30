<div>
    <h4>Bienvenido, {{ Auth::user()->name }}!</h4>
    <p>Gracias por usar nuestra aplicación. Aquí encontrarás información sobre eventos y más.</p>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ver Evaluación</h5>
            <p class="card-text">Accede para ver y completar la evaluación.</p>
            <a href="{{ route('evaluation.index', ['qr_code' => 'codigo_qr']) }}" class="btn btn-primary">Ir a Evaluación</a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Ver Stand Individual</h5>
            <p class="card-text">Explora un stand específico para obtener más información.</p>
            <a href="{{ route('stand.show', ['idStand' => 1]) }}" class="btn btn-primary">Ir a Stand</a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Ver Stands Visitados</h5>
            <p class="card-text">Consulta la lista de stands que has visitado.</p>
            <a href="{{ route('stand.visitados') }}" class="btn btn-primary">Ir a Stands Visitados</a>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">Ver Listado de Stands</h5>
            <p class="card-text">Explora el listado completo de stands disponibles.</p>
            <a href="{{ route('stands.list') }}" class="btn btn-primary">Ir a Listado de Stands</a>
        </div>
    </div>
</div>
