@extends('layouts.app')

@section('content')
<div class="headerIng">
    <div>
      <img src="/img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
    </div>
  </div>
    <br><br>
    <div class=" col-form-label text-md-center text-blue ">
    <h1>A continuación, llena la siguiente información:</h1>
    <!--Formulario de registro-->
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('people.store') }}">
                        <input type="hidden" name="id_users" value="{{Auth::user()->id}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de Documento') }}</label>
                            
                            <div class="col-md-6"> 
                            <select class="form-control" id="type" type="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>  
                                <option value="" selected>Seleccione una opción</option>
                                <option value="1">Tarjeta de Identidad</option>
                                <option value="2">Cedula de Ciudadania</option>
                                <option value="3">Tarjeta de Extranjeria</option>
                                <option value="4">Cedula de Extranjeria</option>
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
                                <option value="1">Administrativos</option>
                                <option value="2">Profesores de planta</option>
                                <option value="3">Profesores de catedra</option>
                                <option value="4">Aprendices</option>
                                <option value="5">Talleristas bienestar</option>
                             </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end"> Tipo de Contrato </label><br>
                            <div class="col-md-6"> 
                            <select id="contract" class="form-control @error('') is-invalid @enderror" name="contract" value="{{ old('contract') }}" required autocomplete="contract" autofocus>
                              <option value="" selected>Seleccione una opción</option>
                              <option value="1">Tiempo completo</option>
                              <option value="2">Medio tiempo</option>
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
                        <div class="col-md-8 offset-md-4">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-blue">
                                    {{ __('Enviar') }}
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
