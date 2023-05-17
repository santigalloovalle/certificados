<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/syles/styles.css') }}">
    <link rel="icon" href="{{ asset('/img/logoicono.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/Redirigir.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-blue shadow-sm">
                <a class="navbar-brand bg-white" href="{{ url('/') }}">
                    {{ config('', '') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <div class="">
                            <a onclick="redirigir01()"><i class="text-light fa-brands fa-whatsapp m-1"></i></a>
                            <a onclick="redirigir02()"><i class="text-light fa-brands fa-instagram m-1"></i></a>
                            <a onclick="redirigir03()"><i class="text-light fa-brands fa-facebook-f m-1"></i></a>
                            <a onclick="redirigir04()"><i class="text-light fa-brands fa-twitter m-1"></i></a>
                        </div>
   

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <a class="text-light mail" onclick="redirigir05()"><i class="text-light fa-solid fa-envelope"></i> Mail corporativo</a>
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if( Auth::user()->name == '0' )
                                        {{ Auth::user()->email }}
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->id_roles =='2')         
                                    <a class="dropdown-item" href="{{ route('admins.show', Auth::user()->id) }}">
                                        {{ __('Mi Info') }}
                                    </a> 
                                    @else
                                    <a class="dropdown-item" href="{{ route('people.show', Auth::user()->id) }}">
                                        {{ __('Mi Info') }}
                                    </a>       
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
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
        <div class="headerIng mt-3">
            <div>
              <img src="./img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
            </div>
          </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
      <!--footer-->
  <footer>
    <div class="footer1 bg-blue text-center">
      <img src="{{asset('img/LogoFooter.png')}}" alt="Logo uniempresarial y cámara de comercio">
      <p>Institución de educación superior sujeta a la inspección y vigilancia del Ministerio de Educación / SNIES 2738
      </p>
    </div>
    <div class="footer2 ">
      <p>Todos los derechos reservados © 2020 -2022 Fundación Universitaria de la Cámara de Comercio de Bogotá
        Uniempresarial | Términos, politicas y Condiciones de Servicio Resolución 598 del Ministerio de Educación.
        Registro Icfes 2738.
      </p>
    </div>
  </footer>
    <script src="https://kit.fontawesome.com/0bf8ac12b9.js" crossorigin="anonymous"></script> <!--Linki de conexión íconos-->
</body>
</html>