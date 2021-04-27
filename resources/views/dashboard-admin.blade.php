<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6"><br><br><br>
                <h2 class="text-center"><i class="fa fa-user"></i> Escritorio del Administrador </h2>
                <hr>

                <div class="card">
                    <div class="card-header"> Modulos Disponibles: </div>

                    <div class="card-body">
                        <div class="list-group btn-group-vertical col-md-12">
                            <a href="{{ url('user')}}" class="btn btn-block text-left" style="background-color: #5eb319; color: #fff;">
                                <i class="fa fa-users"></i> Usuarios
                            </a>
                        </div>
                        <br>
                        <div class="list-group btn-group-vertical col-md-12">
                            <a href="{{ url('escuela')}}" class="btn btn-block text-left" style="background-color: #5eb319; color: #fff;">
                                <i class="fa fa-newspaper"></i> Escuelas
                            </a>
                        </div>
                        <br>
                        <div class="list-group btn-group-vertical col-md-12">
                            <a href="{{ url('clubs')}}" class="btn btn-block text-left" style="background-color: #5eb319; color: #fff;">
                                <i class="fa fa-file-alt"></i> Clubs
                            </a>
                        </div>
                        <br>
                        <div class="list-group btn-group-vertical col-md-12">
                            <a href="{{ url('consultas')}}" class="btn btn-block text-left" style="background-color: #5eb319; color: #fff;">
                                <i class="fa fa-file-alt"></i> Consultar Deportistas
                            </a>
                        </div>
                        <br>
                        <div class="list-group btn-group-vertical col-md-12">
                            <a href="{{ url('carnet')}}" target="_blank" class="btn btn-block text-left" style="background-color: #5eb319; color: #fff;">
                                <i class="fa fa-file-alt"></i> Imprimir Carnet
                            </a>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <br>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://unpkg.com/sweetalert2"></script>

</body>
</html>
