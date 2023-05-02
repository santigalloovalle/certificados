@extends('layouts.app')

@section('content')
<div class="headerIng">
    <div>
      <img src="./img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
    </div>
  </div>
    <!--encabezado titulo-->
    <section class="sectionTitulo2">
        <div class="col-md-4 col-form-label text-md-end bg-red p-3 w-25 text-light">
          <h2>Bienvenido al </h2>
        </div>
        <div class="col-md-4 col-form-label text-md-end bg-blue p-3 m-3 w-50 text-light">
          <h2>Perfil administrador</h2>
        </div>
      </section>
      <br><br><br><br><br><br><br><br><br><br><br><br><br> <!--Corregir Front-->
        <!--Menú perfil administrador-->


        <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-body">
                                <button class="btn btn-red col-md-4 m-5 justify-content-end fa-solid fa-clock-rotate-left">
                                <button class="btn btn-lg btn-red col-md-4 m-5 justify-content-end fa-solid fa-clock-rotate-left"> 
                      </div>
                  </div>
              </div>
          </div>
      </div>





{{-- 
        <div class="d-flex justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
        <!--Botón menú-->
        <div class="row mb-0">
            <div class="col-md-4 offset-md-8">
            <button class="btn btn-red h-5 fa-solid fa-clock-rotate-left">
                <a href="./Historial.html"></a>
            </button>
            <p class="bs-black text-blue font-weight-bold">Historial de certificados</p>
            </div>
        </div>
        <!--Botón menú-->
        <div class="row mb-0">
          <div class="col-md-4 offset-md-8">
            <button class="btn btn-red h-5 fa-solid fa-solid fa-users"><a href=""></a></button>
            <p class="bs-black text-blue font-weight-bold">Usuarios registrados</p>
            </div>
        </div>
    <!--Botón menú-->
    <div class="row mb-0">
      <div class="col-md-4 offset-md-8">
            <button class="btn btn-red h-5 fa-solid fa-solid fa-file" onclick="window.selecC.showModal();"></button>
            <p class="bs-black text-blue font-weight-bold">Generar certificado</p>
            </div>
        <!--Botón menú-->
        <div class="row mb-0"></div>
          <div class="col-md-4 offset-md-8">
            <button class="btn btn-red h-5 fa-solid fa-solid fa-pen-to-square"><a href="./ESalario.html"></a></button>
            <p class="bs-black text-blue font-weight-bold">Editar salarios por cargo</p>
            </div>
        </section>
        <!--Modal que permite eligir al usuario si se quiere generar un certificado para alguien más o para si mismo-->
        <dialog id="selecC" class="modulCer">
        <a href="./perfiladministrador.html"><i class="fa-solid fa-rectangle-xmark"></i></a>
        <h2>El certificado es para:</h2>
        <button class="paraMi" onclick="redirigir10()"> Para mí </button>
        <button class="otraP" onclick="redirigir13()"> Para otra persona</button>
        </dialog>
    </div>--}}
@endsection