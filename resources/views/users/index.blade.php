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
            <div class="divTitulo">
            Genera tu certificado
            </div>
        </section> 
        <section class="certificados">
        <br>
        <!--Generar certificado docentes planta-->
        <p>El certificado contendrá su nombre y documento de identidad. En caso de requerir algún dato adicional, seleccione a continuación.</p><br>
        <!--Opciones a elegir en el certificado-->
        <form method="post" action="Docente.php">
        <div class="chetCerti">
        <input class="form-check-input" type="checkbox" id="salario">
        <label for="salario">Salario</label>
        </div>
            <br>
        <div class="chetCerti">  
        <input class="form-check-input" type="checkbox" id="tipoContrato">
        <label for="tipoContrato">Tipo de Contrato</label>
        </div>
            <br>
        <div class="chetCerti">
        <input class="form-check-input" type="checkbox" id="fechaIngreso">
        <label for="fechaIngreso">Fecha de Ingreso</label><br>
        </div>
        <br>
    <button class="button1" type="submit" id="btn-abrir-modal">Generar</button>
        <!--Confirmación de fecha de documento antes de descargar el certificado por seguridad-->
        <dialog id="modal" class="descargar">
            <h2>Para continuar, valida la fecha de expedición de tu documento.</h2>
            <br>
            <form>
            <input type="date" class="date">
            <br><br>
            <button class="continue1" type="submit" value="Generate PDF">Continuar</button>
            
            </form>
            
            <button id="btn-cerrar-modal" class="cancel1"><a href="Docente.html">Cerrar</a></button>
        </dialog>
        </form>
        </section>
    </body>
@endsection