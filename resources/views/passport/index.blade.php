<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Passports Registrados</h1>
            </div>
            <div class="card-body">
                <nav>
                    <a href="{{route('places.create')}}" class="btn btn-success">Escanear Nuevo Stand</a>
                </nav>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($passports as $passport)
                        <tr>
                            <th scope="row">{{$passport->id}}</th>
                            <th>{{$passport->stand->name}}</th>
                            <td>{{$passport->date}}</td>
                            <td>{{$passport->stand->logo}}</td>                     
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</body>
</html>