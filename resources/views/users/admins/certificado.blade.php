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

            <div class="col-md-4 col-form-label text-md-end bg-red p-3 w-50 text-light">
                <h3>Genera tu certificado</h3>
            </div>
        </section> 

        <section class="container w-50">
            <!--Generar certificado-->
            
            <!--Opciones a elegir en el certificado-->
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4 class=" d-flex text-center">El certificado contendrá su nombre y documento de identidad. En caso de requerir algún dato adicional, seleccione a continuación.</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="Docente.php">
                            <div class="row mb-3">
                                <div class="form-check">
                                    <input class="form-check-input m-2 rounded-pill" type="checkbox" id="salario">
                                    <label class="form-check-label m-2" for="salario">Salario</label>
                                 </div>
                                <div class="row mb-3">

                                    <div class="form-check">  
                                    <input class="form-check-input m-2 rounded-pill" type="checkbox" id="tipoContrato">
                                    <label class="form-check-label m-2" for="form-check-label">Tipo de Contrato</label>
                                    </div>              
                                    <div class="row mb-3">
                                        <div class="form-check">
                                        <input class="form-check-input m-2 rounded-pill" type="checkbox" id="fechaIngreso">
                                        <label class="form-check-label m-2" for="form-check-label">Fecha de Ingreso</label>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-5">
                                                <button class="btn btn-blue w-25" type="submit" id="btn-abrir-modal">Generar</button>
                                                <!--Confirmación de fecha de documento antes de descargar el certificado por seguridad-->
                                                <dialog id="modal" class="descargar">
                                                    <h2>Para continuar, valida la fecha de expedición de tu documento.</h2>
                                                    <form>
                                                    <input type="date" class="date">
                                                    <br><br>
                                                    <button class="continue1" type="submit" value="Generate PDF">Continuar</button>    
                                                    </form>
                                                    <button id="btn-cerrar-modal" class="cancel1"><a href="">Cerrar</a></button>
                                                </dialog>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection