@extends('layouts.app')

@section('content')
    <body>
        <!--encabezado titulo-->
        <section class="sectionTitulo">

            <div class="divTitulo col-md-4 col-form-label text-md-end bg-red p-3 w-50 text-light">
                <h3>Genera tu certificado</h3>
            </div>
        </section> 
        <!--Boton regresar-->
        <div class="d-grid gap-2 d-md-flex justify-content-end m-5">
            <a href="{{asset('/admins')}}"><button class="btn btn-outline-danger" id=""><i class="fa-solid fa-arrow-left px-3"></button></i></button></a>
        </div>

        <section class="formsCards container mt-5 w-50">
            <h3> El certificado contendrá su nombre y documento de identidad. En caso de requerir algún dato adicional, seleccione a continuación.</h3>
            <div class="card">
                    
                <!-- contenido card -->
                <div class=" card-body">
                       <form method="post" action="Docente.php">

                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded " type="checkbox" id="salario">
                                <label class="form-check-label col-4 ms-4 fs-5" for="salario">Salario</label>
                            </div>

                            <div class="form-check">  
                                <input class="form-check-input col-2 rounded " type="checkbox" id="tipoContrato">
                                <label class="form-check-label col-4 ms-4 fs-5" for="form-check-label">Tipo de Contrato</label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded " type="checkbox" id="fechaIngreso">
                                <label class="form-check-label col-4 ms-4 fs-5" for="form-check-label">Fecha de Ingreso</label>
                            </div>
                        </div>

                        <div class="row mt-2"> 
                            <div class="col-12 offset-lg-5 offset-4">
                                <button class="btn btn-blue" type="submit" id="btn-abrir-modal">Generar</button>
                                <!--Confirmación de fecha de documento antes de descargar el certificado por seguridad-->
                                <dialog id="modal" class="descargar">
                                    <h2>Para continuar, valida la fecha de expedición de tu documento.</h2>
                                    <form>
                                        <input type="date" class="date">
                                        <button class="continue1" type="submit" value="Generate PDF">Continuar</button>    
                                    </form>
                                        <button id="btn-cerrar-modal" class="mt-5"><a href="">Cerrar</a></button>
                                </dialog>
                            </div>    
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
@endsection