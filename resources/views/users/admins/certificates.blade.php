@extends('layouts.app')
@section('title')
  Generar Certificado 
@endsection
@section('content')
    <body>
        <!--encabezado titulo-->
        <section class="sectionTitulo">

            <div class="divTitulo col-md-4 col-form-label text-md-end bg-red p-3 w-50 text-light">
                <h3>Genere su certificado</h3>
            </div>
        </section> 
        <!--Boton regresar-->
        <div class="d-grid gap-2 d-md-flex justify-content-end m-5">
            <a href="{{asset('/admins')}}"><button class="btn btn-outline-danger" id=""><i class="fa-solid fa-arrow-left px-3"></button></i></button></a>
        </div>

        <section class="formsCards container mt-5 w-60">
            <h3> El certificado contendrá su nombre y documento de identidad. En caso de requerir algún dato adicional, seleccione a continuación.</h3>
            <div class="card">
                    
                <!-- contenido card -->
                <div class=" card-body">
                    <form action="{{route('generate', $users->id)}}" class="mt-4 d-grid m-auto" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-7 col-md-12 py-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input col-2 rounded " name="salary" type="checkbox" id="salario">
                                    <label class="form-check-label col-4 ms-4 fs-5 w-75"  for="salario">Salario</label>
                                </div>
                                <div class="form-check mb-2">  
                                    <input class="form-check-input col-2 rounded " name="contract" type="checkbox" id="tipoContrato">
                                    <label class="form-check-label col-4 ms-4 fs-5 w-75"  for="tipoContrato">Tipo de Contrato</label>
                                </div> 
                                <div class="form-check mb-2">
                                    <input class="form-check-input col-2 rounded " name="date_i" type="checkbox" id="fecha">
                                    <label class="form-check-label col-4 ms-4 fs-5 w-75"  for="form-check-label">Fechas(Inicio/Fin)</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input col-2 rounded" name="pay_per_hour" type="checkbox" id="pay_per_hour">
                                    <label class="form-check-label col-4 ms-4 fs-5 w-75"  for="Pago">Pago por hora</label>
                                </div>
                            </div>
                        <div class="col-lg-5 col-md-12 text-center py-2">
                            <strong>Seleccione una opción</strong>
                            <div class="radio-inputs">
                                <label>
                                    <input class="radio-input" type="radio" name="opc" value="word">
                                    <span class="radio-tile">
                                        <span class="radio-icon px-3 pt-2">
                                             <i class="fa-solid fa-file-word icon-download "></i> 
                                        </span>
                                        <span class="radio-label">Descargar en Word</span>
                                    </span>
                                </label>
                                <label>
                                    <input checked="" class="radio-input" type="radio" name="opc" value="pdf">
                                    <span class="radio-tile">
                                        <span class="radio-icon px-3 pt-2">
                                            <i class="fa-solid fa-file-pdf icon-download "></i>
                                        </span>
                                    <span class="radio-label">Descargar en PDF</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row mt-2"> 
                    <input type="submit" value="Descargar" class="btn btn-info btn-lg text-white bg-blue text-white border-none my-2 w-25 m-auto"><i class="fa-solid fa-download text-white"></i>
                </div>
            </div>
            </form>
            </div>
            </div>
        </section>
    </body>
@endsection