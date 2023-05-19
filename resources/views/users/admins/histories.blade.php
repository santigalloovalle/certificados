@extends('layouts.app')

@section('content')
    <!--encabezado titulo -->
    <section class="sectionTitulo">
        <div class="divTitulo col-md-4 col-form-label text-md-end bg-red p-3 w-50 text-light">
          <h3 >
          Historial Certificados
          </h3>
        </div>
      </section>
  <!--Filtros de búsqueda-->
    <section class="text-center m-5">
      <!--Filtro selección de cargo-->
    <select class="p-2" id="filtro">
        <option selected value="0">Filtros</option>
        @foreach ($roles as $role)
        <option value="{{$role->id}}">
          {{$role->role}}
        </option>
        @endforeach     
    </select>
    
      <!--Botón para volver-->
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{asset('/admins')}}"><button class="btn btn-outline-danger" id=""><i class="fa-solid fa-arrow-left px-3 justify-content-center"></button></i></button></a>
      </div>
    <!--Tabla de historial de los certificados imprimidos o descargados-->
    <div class="container-fluid mt-4">
      <table class="table table-blue text-light table-bordered ">
        <thead>
            <tr>
              <td scope="col">Nombre Completo</td>
              <td cscope="col">Rol</td>
              <td colspan="2" scope="col">Fecha/Hora</td>
            </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($users as $user)
          <tr>
            <td scope="col"> {{$user->name}}</td>
            <td scope="col"> {{$user->roles->role}}</td>
            <td scope="col">Fecha</td>
            <td scope="col">Hora</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection
