@extends('layouts.app')

@section('content')

  <section class="container my-5 w-50">
    <!--Formulario de registro-->
    <div class="card">
      <div class="card-header text-md-center text-blue ">
        <h1>Tu infomación:</h1>
      </div>
      <div class="card-body">
              <!--Botón para volver-->
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{asset('/admins')}}"><button class="btn btn-outline-danger" id=""><i class="fa-solid fa-arrow-left px-3 justify-content-center"></button></i></button></a>
      </div>
        <h2 class="py-2"><b class="pe-5">Nombre:</b>
          @if( $users->name == '0' )
              {{"Por definir"}}
          @else
              {{ $users->name }}
          @endif
              </h2>
            <h3 class="py-2"><b class="pe-5">Correo:</b> {{$users->email}}</h3>
            <h4 class="py-2"><b class="pe-5">Tipo de Documento:</b> {{$people->documents->type}}</h4>
            <h4 class="py-2"><b class="pe-5">Documento:</b>       
          @if( $people->doc === '1' )
              {{"Por definir"}}
          @else
              {{ $people->doc }}
          @endif</h4>
            <h4 class="py-2"><b class="pe-5">Tipo de Contrato:</b> {{$people->contracts->contract}}</h4>
            <h4 class="py-2"><b class="pe-5">Rol:</b> {{$users->roles->role}}</h4>
            <h4 class="py-2"><b class="pe-5">Salario:</b>       
          @if( $people->salary === '1' )
              {{"Por definir"}}
          @else
              {{ $people->salary }}
          @endif</h4>
            <h4 class="py-2"><b class="pe-5">Pago por Hora:</b>
          @if( $people->pay_per_hour === '1' )
              {{"Por definir"}}
          @else
              {{ $people->pay_per_hour }}
          @endif
        </h4>
          <a name="" id="" class="btn btn-primary" href="{{route('admins.edit', $people->id)}}" role="button">Editar</a>
        </div>
        </div>      
      </div>
    </div>
  </section>
@endsection
