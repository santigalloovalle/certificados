@extends('layouts.app')

@section('content')
    <!--encabezado titulo-->
    <div class="headerIng">
        <div>
          <img src="/img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
        </div>
    </div>
    <!--encabezado titulo -->
    <section class="sectionTitulo">
        <div class="divTitulo col-md-4 col-form-label text-md-end bg-red p-3 w-50 mt- text-light">
          <h3 >
          Historial Certificados
          </h3>
        </div>
      </section>
  <!--Filtros de búsqueda-->
    <section class="sectionBotones text-center m-5">
      <!--Filtro selección de cargo-->
    <select id="filtro">
        <option selected value="0">Filtros</option>
        <option value="">Docentes cátedra</option>  
        <option value="">Docentes planta</option>       
        <option value="">Talleristas bienestar</option>      
        <option value="">Aprendices</option>      
        <option value="">Retirados</option>      
     
    </select>
      <!--Botón para volver-->
    <button id=""><i class="fa-solid fa-arrow-left"></i></button>
    </section>
    <!--Tabla de historial de los certificados imprimidos o descargados-->
    <div class="container">
      <table class="table table-primary ">
        <thead>
            <tr>
              <td scope="col">Nombre Completo</td>
              <td cscope="col">Rol</td>
              <td colspan="2" scope="col">Fecha/Hora</td>
            </tr>
        </thead>
        <tbody>
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
