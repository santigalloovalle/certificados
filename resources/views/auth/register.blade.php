@extends('layouts.app')

@section('content')
<div class="headerIng">
    <div>
      <img src="./img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
    </div>
  </div>
<section class="registro"></section>
    <br><br>
    <div class=" col-form-label text-md-center text-blue ">
    <h1>Regístrate</h1>
    <!--Formulario de registro-->
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="CC" class="col-md-4 col-form-label text-md-end">{{ __('Cédula de ciudadania') }}</label>
                            
                            <div class="col-md-6">    
                                <input id="CC" type="number" class="form-control @error('') is-invalid @enderror" name="" value="{{ old('') }}" required autocomplete="" autofocus>
                            </div> 
                        </div> 
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Rol') }}</label>
                            
                            <div class="col-md-6"> 
                            <select class="form-control">  
                                <option value="0"></option>
                                <option value="1">Administrativos</option>
                                <option value="2">Profesores de planta</option>
                                <option value="3">Profesores de catedra</option>
                                <option value="4">Aprendices</option>
                                <option value="5">Talleristas bienestar</option>
                             </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Institucional') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end"> Tipo de Contrato </label><br>
                            <div class="col-md-6"> 
                            <select required class="form-control">
                              <option value="" selected>Seleccione una opción</option>
                              <option value="Tiempo Completo">Tiempo completo</option>
                              <option value="Medio Tiempo">Medio tiempo</option>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-check col-md-2">
                            <input type="checkbox" class="form-check-input">
                            </div>
                            <label for="" class="col-md-2 col-form-label text-md-end">{{ __('Salario') }}</label>
                            <div class="col-md-6">
                            <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-check col-md-2">
                                <input type="checkbox" class="form-check-input">
                                </div>
                                <label for="" class="col-md-2 col-form-label text-md-end">{{ __('Pago por hora') }}</label>
                                <div class="col-md-6">
                                <input type="number" class="form-control">
                                </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col-md-8 offset-md-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-blue">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
