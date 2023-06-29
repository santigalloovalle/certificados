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

    <link rel="icon" href="{{ asset('/img/logoicono.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Scripts -->
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/datatables.js') }}" defer></script>

    <!-- CSS -->
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    @yield('head')
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
                            <a href="https://api.whatsapp.com/send?phone=573107836734&text=Hola!%20Quiero%20informaci%C3%B3n%20de%20la%20universidad."><i class="text-light fa-brands fa-whatsapp m-1"></i></a>
                            <a href="https://www.instagram.com/uniempresarial/"><i class="text-light fa-brands fa-instagram m-1"></i></a>
                            <a href="https://www.facebook.com/uniempresarial"><i class="text-light fa-brands fa-facebook-f m-1"></i></a>
                            <a href="https://twitter.com/uempresarial"><i class="text-light fa-brands fa-twitter m-1"></i></a>
                            <a class="text-light" href="https://login.microsoftonline.com/login.srf"><i class="text-light fa-solid fa-envelope"></i> Mail corporativo</a>
                        </div>
                    </ul>
                    
                    <ul class="navbar-nav ms-auto">
                        <!-- Right Side Of Navbar -->               
                        <!-- Authentication Links -->
                        @auth
                        @if(Auth::user()->id_roles =='2')
                                <li class="nav-item">
                                    <a class="nav-link active text-light rounded ms-3 {{request()->routeIs('customers.index') ? 'active' : ''}}" aria-current="page" href="/histories">Historial Certificados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-light rounded ms-3 {{request()->routeIs('customers.index') ? 'active' : ''}}" aria-current="page" href="/users">Control usuarios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-light rounded ms-3 {{request()->routeIs('customers.index') ? 'active' : ''}}" aria-current="page" href="{{route('certificates', Auth::user()->id)}}">Generar certificado</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-light rounded mx-2 px-3 {{request()->routeIs('customers.index') ? 'active' : ''}}" aria-current="page" href="/admins">Inicio</a>
                                </li>
                            @endif
                        @endauth
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light rounded" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light rounded" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light rounded" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if( Auth::user()->name == '0' )
                                        {{ Auth::user()->email }}
                                    @else
                                        {{ Auth::user()->name }}
                                    @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->id_roles =='2')         
                                    <a class="dropdown-item rounded" href="{{ route('admins.show', Auth::user()->id) }}">
                                        {{ __('Mi Info') }}
                                    </a> 
                                    @else
                                    <a class="dropdown-item rounded" href="{{ route('people.show', Auth::user()->id) }}">
                                        {{ __('Mi Info') }}
                                    </a>       
                                    @endif
                                    <a class="dropdown-item rounded" href="{{ route('logout') }}"
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
        <div class="headerIng my-2 p-3">
              <img src="{{asset('./img/LogoUECCB.png')}}" alt="Logo Uniempresarial y logo Cámara de comercio" class="container w-50 ">
          </div>

        <main class="mt-2">
            @yield('content')
        </main>
    </div>
      <!--footer-->
  <footer>
    <div class="bg-blue text-center  text-light mt-5 p-4">
            <img src="{{asset('img/LogoFooter.png')}}" alt="Logo uniempresarial y cámara de comercio" class="container w-50 pb-2">
            <p class="mb-0">Institución de educación superior sujeta a la inspección y vigilancia del Ministerio de Educación / SNIES 2738</p>
        </div>
      
    </div>
    <div class="text-center p-2 bg-secondary text-light">
      <p>Todos los derechos reservados © 2020 -2023 Fundación Universitaria de la Cámara de Comercio de Bogotá
        Uniempresarial | Términos, politicas y Condiciones de Servicio Resolución 598 del Ministerio de Educación.
        Registro Icfes 2738.
      </p>
    </div>
  </footer>
    <script src="https://kit.fontawesome.com/0bf8ac12b9.js" crossorigin="anonymous"></script> <!--Linki de conexión íconos-->
</body>
</html>