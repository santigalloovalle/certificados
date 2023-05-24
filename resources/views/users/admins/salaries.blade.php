@extends('layouts.app')

@section('content')
  <main>
      <!--encabezado titulo -->
      <section class="sectionTitulo">
        <div class="divTitulo col-md-4 col-form-label text-md-end bg-red p-3 w-50 text-light">
          <h3 >
          Editar salario
          </h3>
        </div>
      </section>
  <!--Filtros de búsqueda-->
    <section class="text-center m-5">
      <!--Filtro selección de cargo-->
    <select class="p-2" id="filtro">
      @foreach ($roles as $role)
      <option value="{{$role->id}}">
        {{$role->role}}
      </option>
      @endforeach        
    </select>
        <!--Se renderiza el rol seleccionado-->
          <h3 class="d-flex justify-content-center font-weight-bold fs-2 mt-3">Rol Seleccionado:</h3>
          <p id="rolSalario" class="d-flex justify-content-center fs-3" value="">{{"$role->role"}}</p>
          <!--Formulario de esditar salario-->
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                        
                        <div class="row mb-3">
                          <label for="" class="col-md-4 col-form-label text-md-start">{{ __('Nuevo salario') }}</label>
                          <div class="col-md-6">    
                          <input id="salary" type="number" class="form-control @error('') is-invalid @enderror" name="salary" value="{{$people->salary}}" required autocomplete="salary" autofocus>
                          </div>
                      </div>

                        <div class="row mb-5">
                        <label for="#" class="col-md-4 col-form-label text-md-start">{{ __('Este cambio se verá reflejado a partir de:') }}</label>
                        
                        <div class="col-md-6">    
                            <input id="#" type="date" class="form-control required autocomplete=" autofocus>
                        </div> 
                      </div>
                    <!--Botones para guardar o cancelar los cambios a los usuarios -->
                    <div class="row mb-3">
                      <div class="col-md-2 offset-md-3">
                          <button type="submit" class="btn btn-blue btn-lg">
                              {{ __('Registrar') }}
                          </button>
                      </div>
                      <div class="col-md-4">
                        <button type="submit" class="btn btn-danger btn-lg">
                            {{ __('Cancelar') }}
                        </button>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </section>   
  </main>
    
@endsection