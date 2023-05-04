@extends('layouts.app')

@section('content')
<div class="headerIng">
    <div>
      <img src="./img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
    </div>
  </div>
    <!--encabezado titulo-->
    <section class="backTitle">
        <div class=" divTitulo col-md-4 col-form-label text-md-end bg-blue p-3 w-50 text-light">
          <h2>Obtén ahora tu</h2>
        </div>
        <div class="col-md-4 col-form-label text-md-end bg-red p-3 m-3 w-25 text-light">
          <h2>Certificado laboral</h2>
        </div>
      </section>
      
      <!--formulario inicio sesión-->
      <section class="inicioSesion container mt-5">
        <h3 class="d-flex justify-content-center">Iniciar sesión</h3>
        <div class="justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="row mb-3">
                                <label for="user" class="col-md-3 col-form-label text-md-start">{{ __('Usuario') }}</label>

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
                                <label for="password" class="col-md-3 col-form-label text-md-start">{{ __('Contraseña') }}</label>
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
                                <label for="password" class="col-md-3 col-form-label text-md-start">{{ __('Rol') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="{{-- iRol --}}" >
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
                            <div class="col-md-4 col-form-label text-md-end">
                                <div class="form-check form-switch  ">

                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('Recuerdame') }}
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="flexSwitchCheckDefault" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-blue">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                                <br>

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