@extends('layouts.app')

@section('content')
    <body>
        <div class="headerIng">
            <div>
              <img src="/img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
            </div>
        </div>
        <!--encabezado titulo-->
        <section class="sectionTitulo">
            <div class="divTitulo col-md-4 col-form-label text-md-end bg-red p-3 w-50 mt- text-light">
              <p class="fs-1" >
              Genera tu certificado
              </p>
          </section>
        <section class="inicioSesion">
        <br>
        <!--Generar certificado-->
        <h4 class=" d-flex justify-content-center">El certificado contendrá su nombre y documento de identidad. En caso de requerir algún dato adicional, seleccione a continuación.</h4><br>
        <!--Opciones a elegir en el certificado-->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
        <form method="post" action="Docente.php">
            <div class="row mb-3">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="salario">
        <label class="form-check-label" for="salario">Salario</label>
        </div>
            <br>
            <div class="row mb-3">
        <div class="form-check">  
        <input class="form-check-input" type="checkbox" id="tipoContrato">
        <label for="form-check-label">Tipo de Contrato</label>
        </div>
            <br>
            <div class="row mb-3">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="fechaIngreso">
        <label for="form-check-label">Fecha de Ingreso</label><br>
        </div>
        <br>
        
        <div class="row mb-0">
            <div class="col-md-8 offset-md-5">
    <button class="btn btn-blue w-25" type="submit" id="btn-abrir-modal">Generar</button>
        <!--Confirmación de fecha de documento antes de descargar el certificado por seguridad-->
        <dialog id="modal" class="descargar">
            <h2>Para continuar, valida la fecha de expedición de tu documento.</h2>
            <br>
            <form>
            <input type="date" class="date">
            <br><br>
            <button class="continue1" type="submit" value="Generate PDF">Continuar</button>
            
            </form>
            
            <button id="btn-cerrar-modal" class="cancel1"><a href="">Cerrar</a></button>
        </dialog>
        </form>
        </section>
    </body>
@endsection