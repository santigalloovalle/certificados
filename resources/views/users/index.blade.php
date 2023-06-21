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
        
        <section class="container mt-5 w-50 ">
            <div class="card">
                <div class="card-header text-center">
                    <h4> El certificado contendrá su nombre y documento de identidad. En caso de requerir algún dato adicional, seleccione a continuación.</h4>
                </div>
                <!-- contenido card -->
                <div class="card-body">
                <form action="{{route('generatePDF', Auth::user()->id)}}" class="mt-4 d-grid m-auto" method="POST">
                        <input type="hidden" name="id_users" value="{{Auth::user()->id}}">
                        @csrf
                        <div class="row  mt-2">
                        <div class="form-check">
                                <input class="form-check-input col-2 rounded " name="salary" type="checkbox" id="salario">
                                <label class="form-check-label col-7 ms-4 fs-5"  for="salario">Salario</label>
                            </div>
                            <div class="form-check">  
                                <input class="form-check-input col-2 rounded " name="contract" type="checkbox" id="tipoContrato">
                                <label class="form-check-label col-7 ms-4 fs-5"  for="tipoContrato">Tipo de Contrato</label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded " name="date_i" type="checkbox" id="fecha">
                                <label class="form-check-label col-7 ms-4 fs-5"  for="form-check-label">Fecha de Ingreso y Salida</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded" name="pay_per_hour" type="checkbox" id="pay_per_hour">
                                <label class="form-check-label col-7 ms-4 fs-5"  for="Pago">Pago por hora</label>
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
                            <button type="button" class="btn btn-info btn-lg text-white bg-blue text-white border-none mt-4 w-50 m-auto" data-toggle="modal" data-target="#myModal">
                                <a href="#modal1" class="text-white bg-blue text-white border-none"> Descargar </a><i class="fa-solid fa-download text-white"></i>
                            </button>
                        </a>
                    <div id="modal1" class="modalmask p-5">
                        <div class="modalbox movedown">
                            <a href="#close" title="Close" class="close bg-white border-none"><i class="fa-solid fa-circle-xmark text-danger bg-white"></i></a>
                            <h2><strong>Importante</strong></h2>
                                @csrf
                                <h5> Valida la fecha de expedición de tu documento para continuar.</h5>
                                <input name="confirmdate" type="date" class=" my-2 py-1 text-center botonmodal">
                                <button class="mt-2 botonmodal bg-blue" type="submit" value="Generate PDF"><a class="text-white">Generar</a></button>   
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
@endsection