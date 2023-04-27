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
        <!--Botón menú-->
        <div class="row mb-0">
            <div class="col-md-4 offset-md-2">
            <button class="btn btn-red h5 fa-solid fa-clock-rotate-left  ">
                <a class="" href="./Historial.html"></a>
            </button>
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
    </div>
@endsection