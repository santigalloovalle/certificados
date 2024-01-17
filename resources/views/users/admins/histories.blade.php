@extends('layouts.app')
@section('title')
  Historial Certificados
@endsection
@section('head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    
@endsection
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
    
      <!--Botón para volver-->
      <div class="d-grid gap-2 d-md-flex justify-content-end">
        <a href="{{route('admins.index')}}"><button class="btn btn-outline-danger" id=""><i class="fa-solid fa-arrow-left px-3 justify-content-center"></button></i></button></a>
      </div>
    <!--Tabla de historial de los certificados imprimidos o descargados-->
    <div class="container-fluid mt-4">
      <table class="table table-blue text-light table-bordered " id="myTable">
        <thead>
            <tr>
              <td scope="col">Generado por:</td>
              <td scope="col">Generado para:</td>
              <td cscope="col">Rol</td>
              <td scope="col">Fecha</td>
              <td scope="col">Hora</td>
            </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($certificate as $certificate)
          <tr>
            <td scope="col">{{$certificate->users->name}} {{$certificate->users->last}} </td>
            <td scope="col"> {{$certificate->people->users->name}} {{$certificate->people->users->last}}</td>
            <td scope="col"> {{$certificate->users->roles->role}}</td> 
            <td scope="col">{{$certificate->download_date}}</td>
            <td scope="col">{{$certificate->download_hour}}</td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>
  <script>
    $(document).ready( function () {
  $('#myTable').DataTable();
} );
  </script>
@endsection

