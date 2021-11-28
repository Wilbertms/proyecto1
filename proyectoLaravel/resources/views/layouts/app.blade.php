<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IGF</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    IGF Proyecto 1
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <?php if ($tipo == 1) {
                        
                    ?>
                    <ul class="navbar-nav mr-auto">
                        <div class="card-body text-center">
                            <a href="/perfil" class="card-link"><FONT SIZE=4>Perfil</font></a><FONT SIZE=4>    |    </font>
                            <a href="/crearIncidencia" class="card-link"><FONT SIZE=4>Crear Incidencia</font></a><FONT SIZE=4>  |  </font>
                            <a href="/procesos" class="card-link"><FONT SIZE=4>Procesos</font></a><FONT SIZE=4>  |  </font>
                            <a href="/chat" class="card-link"><FONT SIZE=4>Chat </font></a>
                            
                          </div>
                    </ul>

                <?php } if ($tipo == 2) {
                    
                 ?>
                 <ul class="navbar-nav mr-auto">
                        <div class="card-body text-center">
                            <a href="/gestionUsuario" class="card-link"><FONT SIZE=4>Gestión Usuario</font></a><FONT SIZE=4>    |    </font>
                            <a href="/gestionIncidencia" class="card-link"><FONT SIZE=4>Gestión Incidencia</font></a>
                          </div>
                    </ul>

                <?php } if ($tipo == 3) {
                    
                 ?>
                 <ul class="navbar-nav mr-auto">
                        <div class="card-body text-center">
                            <a href="/gestionIncidencia" class="card-link"><FONT SIZE=4>Gestión Incidencia</font></a><FONT SIZE=4>    |    </font>
                            <a href="/chat" class="card-link"><FONT SIZE=4>Chat</font></a><FONT SIZE=4>  |  </font>
                            <a href="/respuesta" class="card-link"><FONT SIZE=4>Solución Incidencia</font></a>
                          </div>
                    </ul>

                <?php } ?>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
