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
                    <form action="{{route('generate', $users->id)}}" class="mt-4 d-grid m-auto" method="POST">
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
                                <label class="form-check-label col-4 ms-4 fs-5"  for="form-check-label">Fechas(Inicio/Fin)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded" name="pay_per_hour" type="checkbox" id="pay_per_hour">
                                <label class="form-check-label col-4 ms-4 fs-5"  for="Pago">Pago por hora</label>
                            </div>
                        </div>
                        </div>
                                {{-- <div class="form-check">
                                <input class="form-check-input col-2 rounded" name="word" type="checkbox" id="word">
                                <label class="form-check-label col-4 ms-4 fs-5"  for="Pago">Descargar en Word</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input col-2 rounded" name="pdf" type="checkbox" id="pdf">
                                <label class="form-check-label col-4 ms-4 fs-5"  for="Pago">Descargar en PDF</label>
                            </div> --}}
                        </div>
                        </div>
                        <div class="row mt-2"> 
                            <div class="col-6 text-end">
                                <input type="submit" value="Descargar PDF" class="btn btn-info btn-lg text-white bg-danger text-white border-none my-4 w-50 m-auto "><i class="fa-solid fa-download text-white"></i>
                            </div>
                            <div class="col-6">
                                <input type="submit" value="Descargar Word" class="btn btn-info btn-lg text-white bg-blue text-white border-none my-4 w-50 m-auto"><i class="fa-solid fa-download text-white"></i>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
@endsection