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
        <!--Menú perfil administrador-->
        <!--Botón menú-->
        <section class="menuAdministrador">
        <div class="divAdministrador">
            <button class="w-50 btn btn-red fa-solid fa-clock-rotate-left">
                <a href="./histories.blade.php"></a>
            </button>
            <p class="bs-black text-blue font-weight-bold">Historial de certificados</p>
        </div>
        <!--Botón menú-->
        <div class="divAdministrador">
            <button class="w-50 btn btn-red fa-solid fa-solid fa-users"><a href=""></a></button>
            <p class="bs-black text-blue font-weight-bold">Usuarios registrados</p>
        </div>
    <!--Botón menú-->
      <div class="divAdministrador">
            <button class="w-50 btn btn-red h-5 fa-solid fa-solid fa-file" onclick="window.selecC.showModal();"></button>
            <p class="bs-black text-blue font-weight-bold">Generar certificado</p>
        </div>
        <!--Botón menú-->
        <div class="divAdministrador">
            <button class="w-50 btn btn-red h-5 fa-solid fa-solid fa-pen-to-square"><a href="./salaries.blade.php"></a></button>
            <p class="bs-black text-blue font-weight-bold">Editar salarios por cargo</p>
        </div>
        </section>
        <!--Modal que permite eligir al usuario si se quiere generar un certificado para alguien más o para si mismo-->
        <dialog id="selecC" class="modulCer">
        <a href="./index.blade.php"><i class="fa-solid fa-rectangle-xmark"></i></a>
        <h2>El certificado es para:</h2>
        <button class="paraMi" onclick="redirigir10()"> Para mí </button>
        <button class="otraP" onclick="redirigir13()"> Para otra persona</button>
        </dialog>
    </div>

@endsection