@extends('layouts.app')

@section('content')
  <div class="d-grid gap-2 d-md-flex justify-content-md-end me-5">
    <a href="{{asset('/admins')}}"><button class="btn btn-outline-danger" id=""><i class="fa-solid fa-arrow-left px-3 justify-content-center"></button></i></button></a>
  </div>
  <section class="container my-5 w-50">
    <!--Formulario de registro-->
    <div class="card">
      <div class="card-header text-md-center text-blue ">
        <h1></h1>Tu infomación:</h1>
      </div>
      <div class="card-body text-center">
              <!--Botón para volver-->
        <h2 class="py-2"><b class="pe-3">Nombre:</b>
          @if( $users->name == '0' )
              {{"Por definir"}}
          @else
              {{ $users->name }}
          @endif
              </h2>
            <h3 class="py-2"><b class="pe-3">Correo:</b> {{$users->email}}</h3>
            <h4 class="py-2"><b class="pe-3">Tipo de Documento:</b> {{$people->documents->type}}</h4>
            <h4 class="py-2"><b class="pe-3">Documento:</b>       
          @if( $people->doc === '1' )
              {{"Por definir"}}
          @else
              {{ $people->doc }}
          @endif</h4>
            <h4 class="py-2"><b class="pe-3">Tipo de Contrato:</b> {{$people->contracts->contract}}</h4>
            <h4 class="py-2"><b class="pe-3">Rol:</b> {{$users->roles->role}}</h4>
            <h4 class="py-2"><b class="pe-3">Salario:</b>       
          @if( $people->salary === '1' )
              {{"Por definir"}}
          @else
              {{ $people->salary }}
          @endif</h4>
            <h4 class="py-2"><b class="pe-3">Pago por Hora:</b>
          @if( $people->pay_per_hour === '1' )
              {{"Por definir"}}
          @else
              {{ $people->pay_per_hour }}
          @endif
        </h4>
        <h4 class="py-2"><b class="pe-3">Fecha Inicio:</b> {{$people->date_i}}</h4>
        <h4 class="py-2"><b class="pe-3">Fecha Fin:</b> {{$people->date_f}}</h4>
        <h4 class="py-2"><b class="pe-3">Cargo:</b> {{$people->onus}}</h4>
        <h4 class="py-2"><b class="pe-3">Area:</b> {{$people->area}}</h4>
      </div>
      <div class="col-md-8 offset-md-4 mb-5">
        <div class="col-md-8 offset-md-2">
            <button type="submit" class="btn btn-blue">
                {{ __('Enviar') }}
            </button>
        </div>
    </div>
      </div>
    </div>      
  </div>
  </div>
  </section>
@endsection
