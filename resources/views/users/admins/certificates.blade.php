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
                <div class="card-body">
                       <form method="post" >

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
                                <button class="btn btn-blue w-25" type="submit" data-toggle="modal" data-target="#modal">Generar</button>
                                <!--Confirmación de fecha de documento antes de descargar el certificado por seguridad-->
                                <div id="modal" class="descargar modal fade" role="dialog">
                                    <h2>Para continuar, valida la fecha de expedición de tu documento.</h2>
                                    <form>
                                        <input type="date" class="date">
                                        <button class="continue1" type="submit" value="Generate PDF">Continuar</button>    
                                    </form>
                                        <button id="btn-cerrar-modal" class="mt-5"><a href="">Cerrar</a></button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header ps-5">
                                                <button type="button" class="close ms-5 text-danger" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the modal.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                    </form>
                </div>
            </div>
        </section>
    </body>
@endsection