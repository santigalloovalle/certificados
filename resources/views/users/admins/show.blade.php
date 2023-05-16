@extends('layouts.app')

@section('content')

  <section class="container my-5 w-50">
    <!--Formulario de registro-->
    <div class="card">
      <div class="card-header text-md-center text-blue ">
        <h1>Tu infomación:</h1>
      </div>
      <div class="card-body">
        <h2 class="py-2"><b class="pe-5">Nombre:</b> {{$people->name}}</h2>
        <h3 class="py-2"><b class="pe-5">Correo:</b> {{$people->email}}</h3>
        <h4 class="py-2"><b class="pe-5">Tipo de Documento:</b> {{$people->type}}</h4>
        <h4 class="py-2"><b class="pe-5">Documento:</b> {{$people->doc}}</h4>
        <h4 class="py-2"><b class="pe-5">Tipo de Contrato:</b> {{$people->contract}}</h4>
        <h4 class="py-2"><b class="pe-5">Rol:</b> {{$people->role}}</h4>
        <h4 class="py-2"><b class="pe-5">Salario:</b> {{$people->salary}}</h4>
        <h4 class="py-2"><b class="pe-5">Pago por Hora:</b> {{$people->pay_per_hour}}</h4>
        <a name="" id="" class="btn btn-primary" href="{{route('admins.edit', $people->id)}}" role="button">Editar</a>
      </div>
    </div>
  </section>
@endsection
