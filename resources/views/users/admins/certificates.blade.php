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
                            </div>    
                            <a href="#modal1" class="text-white bg-blue text-white border-none mt-4 w-100 ">
                            <button type="button" class="btn btn-info btn-lg text-white bg-blue text-white border-none mt-4 w-25 m-auto" data-toggle="modal" data-target="#myModal">
                                <a href="#modal1" class="text-white bg-blue text-white border-none"> Descargar </a><i class="fa-solid fa-download text-white"></i>
                            </button>
                        </a>
                            <div id="modal1" class="modalmask p-5">
                                <div class="modalbox movedown">
                                    <a href="#close" title="Close" class="close bg-white border-none"><i class="fa-solid fa-circle-xmark text-danger bg-white"></i></a>
                                    <h2><strong>Importante</strong></h2>
                                    <form action="" class="mt-4 d-grid m-auto">
                                        <h5> Valida la fecha de expedición de tu documento para continuar.</h5>
                                        <input name="confirmdate" type="date" class=" my-2 h-70 py-1 text-center">
                                        <button class="mt-2 botonmodal w-50 h-70 bg-blue" type="submit" value="Generate PDF"><a class="text-white" href="CertificadoLaboral">Generar</a></button>   
                                    </form>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
@endsection