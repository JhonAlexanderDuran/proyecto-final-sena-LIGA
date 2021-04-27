<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Inicio de sesión </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    
</head>
<body style="background-image: url({{ asset('imgs/ligaPatinajeCaldas.jpg')  }}); overflow: hidden; background-repeat: no-repeat; background-size: 100%">
    <br>
    <br>
    <br>

    <div class="container" id="login">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <br>
                <img src="{{ asset('imgs/logob.png') }}" width="300px" style="position: absolute; left: -40px; filter: blur(3px); opacity: .4">
                <div id="infologin">
                   
                    <br><br>
                    
                </div> 
               
                <div class="card row col-md-8" id="forml" style="border-radius: 8px">
                    <h2 class="text-center"> <i class="fa fa-sign-in-alt"></i> Ingreso de usuarios</h2>
                    <hr>
                    <div class="card-body">
                        <form class="form-group" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" autofocus>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-block" style="background-color: #5eb319; color: #fff;">
                                        Ingresar
                                    </button>

                                    <a class="btn btn-link btn-block" style="color: #000; text-decoration: none" href="{{ route('password.request') }}">
                                        ¿Has olvidado tu contraseña?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://unpkg.com/sweetalert2"></script>

</body>
</html>