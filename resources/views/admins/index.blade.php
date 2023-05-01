@extends('layouts.app')

@section('content')

  <!--Logo y cambiar contraseña-->  
  <div class="headerIng">
      <div>
        <img src="/img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
      </div>
  </div>

  <!--encabezado titulo-->  
  <section class="sectionTitulo2">
    <div class="divTitulo">
      bienvenido al perfil administrador
    </div>
  </section>

  <!--Corregir Front-->

  <!--Menú perfil administrador-->

  <!--Botón menú-->

  <section class="row mt-5 text-center">
    <div class="col-6">  
      <div class="card bg-danger bg-gradient" style="width: 20rem;">
        <i class="btn btn-red h5 fa-solid fa-clock-rotate-left"></i>
        <div class="card-body">
        <h5 class="card-title">historial de certificado</h5>
        <a href="#" class="btn btn-primary $blue-900">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-6">  
      <div class="card bg-danger bg-gradient" style="width: 20rem;">
        <i class="btn btn-red h5 fa-solid fa-solid fa-users"></i>
        <div class="card-body">
        <h5 class="card-title">Usuarios registrados</h5>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </section>
    
    <section class="row text-center">
    <div class="col-6 mt-3">  
      <div class="card bg-danger bg-gradient" style="width: 20rem;">
        <i class="btn btn-red h5 fa-solid fa-file"></i>
        <div class="card-body">
        <h5 class="card-title">Generar certificado</h5>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    
    <div class="col-6 mt-3">  
      <div class="card bg-danger bg-gradient" style="width: 20rem;">
        <i class="btn btn-red h5 fa-solid fa-rectangle-xmark"></i>
        <div class="card-body">
          <h5 class="card-title">Editar salario por cargos</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </section>
  
  {{-- <div class="row mb-0">
    <div class="col-5-md-4 offset-md-2">
      <button class="btn btn-red h5 fa-solid fa-clock-rotate-left"><a class="" href="./Historial.html"></a></button>
      <p class="bs-black text- font-weight-bold">Historial de certificados</p>

      <!--Botón menú-->
      <div class="divAdministrador">
      <button onclick="redirigir09()"><a href="./php/table.php"> <i class="fa-solid fa-users"></i></a></button>
      <p>Usuarios registrados</p>
      </div>
      
      <!--Botón menú-->
      <div class="divAdministrador">
        <button onclick="window.selecC.showModal();"><i class="fa-solid fa-file"></i></button>
        <p>Generar certificado</p>
      </div>

      <!--Botón menú-->
      <div class="divAdministrador">
        <button onclick="redirigir11()"><a href="./ESalario.html"> <i class="fa-solid fa-pen-to-square"></i></a></button>
        <p>Editar salarios por cargo</p>
        </div>
      </section>

      <!--Modal que permite eligir al usuario si se quiere generar un certificado para alguien más o para si mismo-->
      <dialog id="selecC" class="modulCer">
        <a href="./perfiladministrador.html"><i class="fa-solid fa-rectangle-xmark"></i></a>
        <h2>El certificado es para:</h2>
        <button class="paraMi" onclick="redirigir10()"> Para mí </button>
        <button class="otraP" onclick="redirigir13()"> Para otra persona</button>
      </dialog>
    </div> --}}
@endsection