@extends('layouts.app')

@section('content')
<div class="header2">
    <div>
    <img src="../img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
    </div>
</div>
    <!--encabezado titulo-->
  <section class="sectionTitulo">
    <div class="divTitulo">
    Genera tu certificado
    </div>
</section> 
<!--Genera certificado a perfil administrador-->
<section class="certificados">
<br>
<p>El certificado contendrá su nombre y documento de identidad. En caso de requerir algún dato adicional, seleccione a continuación.</p><br>
<!--Opciones a elegir en el certificado-->
<form method="post" action="">
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
<section class="sectionBotones2"><!--Contenedor de botones-->
    <button class="botonVolver" type="submit"><a href="./perfiladministrador.html">Volver</a></button>
    <button class="botonGuardar" type="submit" id="btn-abrir-modal">Generar</button>
</section>

<!--Confirmación de fecha de documento antes de descargar el certificado por seguridad-->
<dialog id="modal" class="descargar">
  <h2>Para continuar, valida la fecha de Expedición de tu Documento</h2>
  <br>
  <form>
    <input id="FechaExp" type="date" class="date">
    <br><br>
    <button type="submit" class="continue">Continuar</button>
    
  </form>
  <button id="btn-cerrar-modal" class="cancel">Cerrar</button>
</dialog>
</form>
</section>
@endsection