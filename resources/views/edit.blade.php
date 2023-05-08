@extends('layouts.app')

@section('content')
<body>
  <div class="headerIng">
    <div>
      <img src="/img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
    </div>
</div>
    <!--Editar usuario a través del perfil administrador -->
      <h2 class="tituloEditar text-center">Editar Usuario</h2>

      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                      <div class="row mb-3">
                        <label for="name" class="col-md-2 col-form-label text-md-end">{{ __('Nombre') }}</label>

                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>
                    <div class="row mb-3">
                        <label for="CC" class="col-md-2 col-form-label text-md-end">{{ __('C.C') }}</label>
                        
                        <div class="col-md-8">    
                            <input id="CC" type="number" class="form-control @error('') is-invalid @enderror" name="" value="{{ old('') }}" required autocomplete="" autofocus>
                        </div> 
                    </div> 
                    <div class="row mb-3">
                      <label for="" class="col-md-2 col-form-label text-md-end">{{ __('Rol') }}</label>
                      
                      <div class="col-md-8"> 
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
                        <label for="" class="col-md-2 col-form-label text-md-end">{{ __('Pago por hora') }}</label>
                        
                        <div class="col-md-8">    
                            <input id="#" type="number" class="form-control required autocomplete=" autofocus>
                        </div> 
                    </div> 
                    <div class="row mb-3">
                      <label for="CC" class="col-md-2 col-form-label text-md-end">{{ __('Tiempo de contrato') }}</label>
                      
                      <div class="col-md-8">    
                          <input id="#" type="number" class="form-control required autocomplete=" autofocus>
                      </div> 
                  </div> 
                  <div class="row mb-3">
                    <label for="CC" class="col-md-2 col-form-label text-md-end">{{ __('Tiempo en la institución') }}</label>
                    
                    <div class="col-md-8">    
                        <input id="#" type="number" class="form-control required autocomplete=" autofocus>
                    </div> 
                  </div>
                </section>
                <!--Botones para guardar o cancelar los cambios a los usuarios -->
                <div class="row mb-3">
                  <div class="col-md-2 offset-md-4 h-75">
                      <button type="submit" class="btn btn-blue">
                          {{ __('Registrar') }}
                      </button>
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-danger ">
                        {{ __('Cancelar') }}
                    </button>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
</body>
@endsection