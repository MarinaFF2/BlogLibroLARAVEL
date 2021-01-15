<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Course CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset ('css/css_general.css')}}" media="screen" />    
        <link rel="stylesheet" type="text/css" href="{{asset ('css/bootstrap.min.css')}}" media="screen" /> 
        @yield('css')

        <!-- Javascript -->
        <script src="{{asset ('js/jquery-3.2.1.slim.min.js')}}"></script>
        <script src="{{asset ('js/popper.min.js')}}"></script>
        <script src="{{asset ('js/bootstrap.min.js')}}"></script>
        <script src="{{asset ('js/jquery-3.3.1.min.js')}}"></script>
        @yield('javascript')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="bienvenidaS">
                    <h1>Tsundoku</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="bienvenidaS" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" href="noticiasS">Noticias</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Listar Libros</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="porNombreS">Por Nombre</a>
                                <a class="dropdown-item" href="porAutorS">Por Autor</a>
                                <a class="dropdown-item" href="BuscarS">Buscar</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <kbd><kbd><a  href="enlaceIniciarSesion">Iniciar Sesion</a></kbd></kbd>
            </nav>
        </header>
        <main>
            @yield('contenido')
        </main>
        <footer>
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <p>Marina Estefanía Flores Fernandez</p>
                </a>
                <a class="navbar-brand" href="#">
                    <img id="icono" src="{{asset ('img/iconos/logotipo.svg')}}"/>
                </a>
                <a class="navbar-brand" href="https://es-es.facebook.com/">
                    <img id="icono" src="{{asset ('img/iconos/facebook.png')}}"/>
                </a>
                <a class="navbar-brand" href="https://www.instagram.com/?hl=es">                
                    <img id="icono" src="{{asset ('/img/iconos/instagram.png')}}"/>
                </a>
            </nav>
        </footer>
    </body>
</html>
