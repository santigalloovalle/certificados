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
                    <form action="{{route('generatePDF', $users->id)}}" class="mt-4 d-grid m-auto" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded " name="salary" type="checkbox" id="salario">
                                <label class="form-check-label col-4 ms-4 fs-5"  for="salario">Salario</label>
                            </div>
                            <div class="form-check">  
                                <input class="form-check-input col-2 rounded " name="contract" type="checkbox" id="tipoContrato">
                                <label class="form-check-label col-4 ms-4 fs-5"  for="tipoContrato">Tipo de Contrato</label>
                            </div> 
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded " name="date_i" type="checkbox" id="fecha">
                                <label class="form-check-label col-4 ms-4 fs-5"  for="form-check-label">Fecha de Ingreso y Salida</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded" name="pay_per_hour" type="checkbox" id="pay_per_hour">
                                <label class="form-check-label col-4 ms-4 fs-5"  for="Pago">Pago por hora</label>
                            </div>
                        </div>
                        </div>
                        <div class="row mt-2"> 
                            <button type="submit" class="btn btn-info btn-lg text-white bg-blue text-white border-none mt-4 w-25 m-auto">
                                <a class="text-white bg-blue text-white border-none"> Descargar </a><i class="fa-solid fa-download text-white"></i>
                            </button>
                            </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
@endsection