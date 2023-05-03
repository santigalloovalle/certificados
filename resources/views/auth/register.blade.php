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
                            <label for="t_doc" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de Documento') }}</label>
                            
                            <div class="col-md-6"> 
                            <select class="form-control" id="t_doc" type="t_doc" class="form-control @error('name') is-invalid @enderror" name="t_doc" value="{{ old('t_doc') }}" required autocomplete="t_doc" autofocus>  
                                <option value="" selected>Seleccione una opción</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                <option value="CC">Cedula de Ciudadania</option>
                                <option value="TE">Tarjeta de Extranjeria</option>
                                <option value="CE">Cedula de Extranjeria</option>
                             </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="CC" class="col-md-4 col-form-label text-md-end">{{ __('Cédula de ciudadania') }}</label>
                            
                            <div class="col-md-6">    
                                <input id="doc" type="number" class="form-control @error('') is-invalid @enderror" name="doc" value="{{ old('doc') }}" required autocomplete="doc" autofocus>
                            </div> 
                        </div> 
                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Rol') }}</label>
                            
                            <div class="col-md-6"> 
                                <select id="role" class="form-control @error('') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>  
                                    <option value="" selected>Seleccione una opción</option>
                                    <option value="AD">Administrativos</option>
                                    <option value="PP">Profesores de planta</option>
                                    <option value="PC">Profesores de catedra</option>
                                    <option value="A">Aprendices</option>
                                    <option value="TB">Talleristas bienestar</option>
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
                            <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Salario') }}</label>
                            <div class="col-md-6">
                            <input id="salary" type="number" class="form-control @error('') is-invalid @enderror" name="salary" value="{{ old('salary') }}" required autocomplete="salary" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                                <label for="pay_per_hour" class="col-md-4 col-form-label text-md-end">{{ __('Pago por hora') }}</label>
                                <div class="col-md-6">
                                <input id="pay_per_hour" type="number" class="form-control @error('') is-invalid @enderror" name="pay_per_hour" value="{{ old('pay_per_hour') }}" required autocomplete="pay_per_hour" autofocus>
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
                            <div class="col-md-8 offset-md-2">
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
