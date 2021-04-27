<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top navbar-static-top">
    <div class="container col-md-12">
        <div id="slogan" class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="navbar-toogler-icon"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/home') }}" style="color: #000;">
                <img src="{{ asset('imgs/tornado.jpg')  }}" width="50px">
                Club de Patinaje Tornado
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                &nbsp;&nbsp;
            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <div id="registro">
                        <li><a href="{{ route('register') }}" class="nav-link" style="font-size: 25px; text-align: center; color: #fff;"> Registrarse</a></li>
                    </div>
                @else
                    <li class="dropdown" style="background-color: #5eb319; position: relative">
                        <a href="#" class="dropdown-toggle nav-link" style="color: #fff; height: 68px; line-height: 50px; position: relative; left: 4px;" data-toggle="dropdown" role="button" aria-expanded="false">

                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu col-md-12" role="menu">
                            <li>
                                @if(Auth::user()->role == 'Admin')
                                    <a href="{{ url('user')}}" class="dropdown-item">
                                        <i class="fa fa-users"></i> Usuarios
                                    </a>
                                    <a href="{{ url('escuela')}}" class="dropdown-item">
                                        <i class="fa fa-bookmark"></i> Escuela
                                    </a>
                                    <a href="{{ url('clubs')}}" class="dropdown-item">
                                        <i class="fa fa-newspaper"></i> Club
                                    </a>
                                    <a href="{{ url('consultas')}}" class="dropdown-item">
                                        <i class="fa fa-search"></i> Consultas
                                    </a>

                                    <div class="dropdown-divider"></div>
                                @elseif(Auth::user()->role == 'Instructor')
                                    <a href="{{ url('user')}}" class="dropdown-item">
                                        <i class="fa fa-users"></i> Usuarios
                                    </a>

                                    <a href="{{ url('datos')}}" class="dropdown-item">
                                        <i class="fa fa-table"></i> Mis datos
                                    </a>
                                    <div class="dropdown-divider"></div>
                                @elseif(Auth::user()->role == 'Aprendiz')
                                    <a href="{{ url('escalas')}}" class="dropdown-item">
                                        <i class="fa fa-newspaper"></i> Escalas
                                    </a>

                                    <a href="{{ url('datos')}}" class="dropdown-item">
                                        <i class="fa fa-table"></i> Mis datos
                                    </a>
                                    <div class="dropdown-divider"></div>
                                @endif
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-times"></i> Cerrar Cesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>
</nav>
