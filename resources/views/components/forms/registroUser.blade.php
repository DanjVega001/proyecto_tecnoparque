
@extends('layouts.app')
@section('content')
<section class="vh-100" style="background-color: #3dac05;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form>

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">LLenar Formulario de Registro</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Crear una cuenta</h5>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Correo electrónico</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Contraseña</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="button">Registrarse</button>
                                    </div>

                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Ya tienes una cuenta? <a href="#!"
                                            style="color: #393f81;">Inicia sesión</a></p>
                                    <a href="#!" class="small text-muted">Términos de uso.</a>
                                    <a href="#!" class="small text-muted">Política de privacidad</a>
                                </form>

                                <!-- Enlace para "Registrarse con Google" -->
                                <div class="text-center">
                                    <a href="#" class="btn btn-info btn-lg mt-3">
                                        <i class="fab fa-google me-2"></i> Registrarse con Google
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection