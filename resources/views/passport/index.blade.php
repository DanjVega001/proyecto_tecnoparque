<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro Stand</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ICONOS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="user.css">
    <link href="{{ asset('css/user/user.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>

        .bx-chevron-left{
            color: #fff;
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- HEADER -->
            <div class="container-fluid">
                <div class="row headerUp pt-2">
                    <div class="col-3 text-center">
                        <a href="/stands"><i class='bx bx-chevron-left'></i>
                        </a>
                    </div>
                    <div class="col-3 text-center d-flex justify-content-between align-items-center ">
                        <a href="/home" class="btn btn-link text-white">HOME</a>
                    </div>
                    <div class="col-3 text-center d-flex justify-content-between align-items-center ">
                        <a href="/stands" class="btn btn-link text-white">STANDS</a>
                    </div>
                    

                    <div class="col-3 text-center">
                        <i class='bx bx-user'></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm lineaOsucra">

                    </div>
                </div>
            </div>
        </div>

        {{-- resources/views/components/usuarios/homeUser.blade.php --}}
        <div class="row">
            <div class="container-fluid contenidoCard">
                <div class="row">
                    @foreach ($passports as $passport)
                        <div class="col-6">
                            <div class="position-relative">
                                <a href="/stands/{{ $passport->stand->id }}">
                                    <img class="logoEmpresa" src="{{ $passport->stand->logo }}" alt="{{ $passport->stand->logo }} Image">
                                </a>
                                <div class="watermark">
                                    <img src="{{ asset('img/stands/visitado.png') }}" alt="sello de Visitado">
                                </div>
                            </div>
                        </div>
                        @if(($loop->index + 1) % 2 === 0)
                            </div><div class="row">
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>

</html>
