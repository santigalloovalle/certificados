@extends('layouts.app')

@section('content')
<div class="headerIng">
    <div>
      <img src="/img/LogoUECCB.png" alt="Logo Uniempresarial y logo Cámara de comercio">
    </div>
  </div>
    <br><br>
    <div class=" col-form-label text-md-center text-blue ">
    <h1>Tu infomación:</h1>
    <!--Formulario de registro-->
    </div>
    <div class="container">
        <h1><b>Nombre:</b> {{$people->name}}</h1>
        <h2><b>Correo:</b> {{$people->email}}</h2>
        <h6><b>Tipo de Documento:</b> {{$people->type}}</h6>
        <h6><b>Documento:</b> {{$people->doc}}</h6>
        <h6><b>Tipo de Contrato:</b> {{$people->contract}}</h6>
        <h6><b>Rol:</b> {{$people->role}}</h6>
        <h6><b>Salario:</b> {{$people->salary}}</h6>
        <h6><b>Pago por Hora:</b> {{$people->pay_per_hour}}</h6>
        <a name="" id="" class="btn btn-primary" href="{{route('users.edit', $people->id)}}" role="button">Editar</a>
    </div>
@endsection
