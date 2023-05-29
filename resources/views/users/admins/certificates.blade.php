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
                       <form method="post" action="">
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
                                <div id="modal" class="descargar modal fade" role="dialog">
                                    <form>
                                        <button class="continue1" type="submit" value="Generate PDF">Continuar</button>    
                                    </form>
                                        <button id="btn-cerrar-modal" class="mt-5"><a href="">Cerrar</a></button>
                                </div>
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                    <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button class="close-modal" data-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i></button>
                                                <h2>Para continuar, valida la fecha de expedición de tu documento.</h2>
                                                <form class="mt-5 d-grid m-auto w-modal">
                                                    <input type="date" class="mb-4 text-center h-100">
                                                    <a class="text-white" href="CertificadoLaboral"><button class=" mt-4  m-auto w-50 h-70 bg-blue" type="submit" value="Generate PDF">Generar</button></a>   
                                                </form>
                                            </div>
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