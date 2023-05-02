@extends('layouts.app')

@section('content')
<main>

    <div class="headerIng">
        <div>
          <img src="/img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
        </div>
    </div>
    <!--encabezado titulo -->
    <section class="sectionTitulo">
        <div class="divTitulo">
          <h3>
          Editar Salario
          </h3>
      </section>
      </section>
    <!--Editar salarios dependiendo el cargo elegido-->
    <!--Selección de cargo-->
          <select class="mt-5 m-5">
              <option selected value="0">Cargo</option>
              <option value="1">Docentes cátedra</option>      
              <option value="2">Administrativos</option>      
              <option value="3">Docentes planta</option>       
              <option value="4">Talleristas bienestar</option>      
              <option value="5">Aprendices</option>          
          </select>
    <!--Se renderiza el rol seleccionado-->
        <p class="d-flex justify-content-center font-weight-bold">Rol Seleccionado:</p>
        <p id="rolSalario" class="d-flex justify-content-center">Ninguno</p>
    <!--Formulario de esditar salario-->
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-body">
                  
                  <div class="row mb-3">
                    <label for="" class="col-md-2 col-form-label text-md-end">{{ __('Nuevo salario') }}</label>
                    <div class="col-md-8">    
                        <input id="#" type="number" class="form-control required autocomplete=" autofocus>
                    </div> 
                  </div> 

                  <label for="#" class="col-md-2 col-form-label text-md-end">{{ __('Este cambio se verá reflejado a partir de:') }}</label>
                  
                  <div class="col-md-5">    
                      <input id="#" type="date" class="form-control required autocomplete=" autofocus>
                  </div> 
                </div>
              </section>
              <!--Botones para guardar o cancelar los cambios a los usuarios -->
              <div class="row mb-3">
                <div class="col-md-2 offset-md-4 h-75">
                    <button type="submit" class="btn btn-blue btn-group-lg">
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
  </main>
    
@endsection