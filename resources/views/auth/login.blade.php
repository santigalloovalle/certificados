@extends('layouts.app')

@section('content')
<div class="headerIng">
    <div>
      <img src="./img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
    </div>
  </div>
<div class="container">
    <!--encabezado titulo-->
    <section class="backTitle">
        <div class="title1">
          <h2>Obtén ahora tu</h2>
        </div>
        <div class="title2">
          <h2>Certificado laboral</h2>
        </div>
      </section>
      <br><br><br>
      <!--formulario inicio sesión-->
      <section class="inicioSesion">
        <h3>Iniciar sesión</h3>
        <br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label><i class="fa-solid fa-briefcase"></i> Rol </label><br>
                            <select id="iRol">
                              <option value="0">Seleccione Cargo</option>
                              <option value="1">Administrativos</option>
                              <option value="2">Profesores de planta</option>
                              <option value="3">Profesores de catedra</option>
                              <option value="4">Aprendices</option>
                              <option value="5">Talleristas bienestar</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button1">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection