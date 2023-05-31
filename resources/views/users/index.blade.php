@extends('layouts.app')

@section('content')
    <body>
        <!--encabezado titulo-->
        <section class="sectionTitulo">
            <div class="divTitulo col-md-4 text-md-end bg-red p-3 w-50 text-light">
              <h1>Genera tu certificado</h1>
            </div>
        </section>
        <!--Generar certificado-->
        
        <section class="container mt-5 w-50">
            <div class="card">
                <div class="card-header text-center">
                    <h4> El certificado contendrá su nombre y documento de identidad. En caso de requerir algún dato adicional, seleccione a continuación.</h4>
                </div>
                <!-- contenido card -->
                <div class="card-body">
                    <form method="post">

                        <div class="row  mt-2">

                            <div class="form-check">
                                <input class="form-check-input col-2 rounded " type="checkbox" id="salario">
                                <label class="form-check-label col-4 ms-4 fs-5" for="salario">Salario</label>
                            </div>
                            <div class="form-check">  
                                <input class="form-check-input col-2 rounded " type="checkbox" id="tipoContrato">
                                <label class="form-check-label col-4 ms-4 fs-5" for="tipoContrato">Tipo de Contrato</label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded " type="checkbox" id="fechaIngreso">
                                <label class="form-check-label col-4 ms-4 fs-5" for="form-check-label">Fecha de Ingreso y Salida</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded" type="checkbox" id="pay_per_hour">
                                <label class="form-check-label col-4 ms-4 fs-5" for="Pago">Pago por hora</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8 offset-md-5">
                                <button class="btn btn-blue w-25" type="submit" id="btn-abrir-modal"><a href="CertificadoLaboral">Generar</a></button>
                                <!--Confirmación de fecha de documento antes de descargar el certificado por seguridad-->
                                <dialog id="modal" class="descargar">
                                    <h2>Para continuar, valida la fecha de expedición de tu documento.</h2>
                                    <form>
                                    <input type="date" class="date">
                                    <button class="continue1" type="submit" value=""><a>Continuar</button>
                                    </form>
                                <button id="btn-cerrar-modal" class="cancel1"><a href="">Cerrar</a></button>
                                </dialog>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
@endsection