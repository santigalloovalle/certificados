@extends('layouts.app')
@section('head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
@section('title')
  Usuarios
@endsection
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection
@section('content')
    <!--encabezado titulo -->
    <section class="sectionTitulo">
        <div class="divTitulo col-md-4 col-form-label text-md-end bg-red p-3 w-50 text-light">
          <h2 >
          Control usuarios
          </h2>
        </div>
      </section>
  <!--Filtros de búsqueda-->
    <section class="text-center m-5" id="rol">
      <!--Filtro selección de cargo-->

      <!--Botón para volver-->
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{asset('/admins')}}"><button class="btn btn-outline-danger" id=""><i class="fa-solid fa-arrow-left px-3 justify-content-center"></button></i></a>
      </div>
    <!--Tabla de historial de los certificados imprimidos o descargados-->
    <div class="container-fluid mt-4">
      <table class="table table-blue text-light table-bordered " id="myTable">
        <thead>
            <tr>
              <th scope="col">Nombres</th>
              <th scope="col">Apellidos</th>
              <th scope="col">Correo institucional</th>
              <th scope="col">Rol</th>
              <th scope="col">Editar</th>
              <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($users as $user)
          <tr>
            <td scope="col"> {{$user->name}}</td>
            <td scope="col"> {{$user->last}}</td>
            <td scope="col"> {{$user->email}}</td>
            <td scope="col"> {{$user->roles->role}}</td>
            <td><div hclass="btn-group " role="group" aria-label="Button group name"><a href="{{route('admins.edit', $user->id)}}"> <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-pen"></i></button></a></td>
            <td><div class="btn-group " role="group" aria-label="Button group name"><a href="{{route('certificates', $user->id)}}"> <button type="button" class="btn btn-outline-success"><i class="fa-solid fa-file-pdf"></i></button></a></td>
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
