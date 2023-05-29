@extends('layouts.app')

@section('content')
    <!--encabezado titulo-->
    <section class="sectionTitulo2">
        <div class="divTitulo2">
          <div class="col-md-4 col-form-label text-md-end bg-red p-4 w-25 text-light">
            <h2>Obten ahora tu </h2>
          </div>
          <div class="col-md-4 col-form-label text-md-end bg-blue p-4 m-3 w-50 text-light">
            <h2>Certificado laboral</h2>
          </div>
        </div>
    </section>
      
      <!--formulario inicio sesión-->
      <section class="formsCards container mt-5 ">
        <h3 class="d-flex justify-content-center">Iniciar sesión</h3>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="row mb-3">
                                <label for="user" class="col-md-4 col-form-label text-md-start">{{ __('Usuario') }}</label>

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
                                <label for="password" class="col-md-4 col-form-label text-md-start">{{ __('Contraseña') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="row mb-3 ">
                            <div class="col-md-6 col-form-label ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="flexSwitchCheckDefault" {{ old('remember') ? 'checked' : '' }}>
 
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ __('Recuerdame') }}
                                    </label>
                                    
                                </div>
                            </div>
                            <div class="col-md-8 offset-md-4">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-blue">
                                        {{ __('Iniciar Sesión') }}
                                    </button>
                                </div>
                            </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link col-md-12 mt-2" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection