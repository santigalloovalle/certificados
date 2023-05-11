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
          Usuarios registrados
          </h3>
        </div>
      </section>
  <!--Filtros de búsqueda-->
    <section class="text-center m-5">
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
    <div class="container-fluid">
      <table class="table table-primary ">
        <thead>
            <tr>
              <td scope="col">Nombre Completo</td>
              <td scope="col">Correo institucional</td>
              <td scope="col">Usuario</td>
              <td scope="col">rol</td>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="col"></td>
            <td scope="col"></td>
            <td scope="col"></td>
            <td scope="col"></td>
          </tr>
        </tbody>
      </table>
    </div>
@endsection