@extends('layouts.app')

@section('content')
    <br><br>
    <div class=" col-form-label text-md-center text-blue ">
    <h1>A continuación, complete la siguiente información:</h1>
    <!--Formulario de registro-->
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admins.update', $people->id) }}">
                        <input type="hidden" name="id_users" value="{{Auth::user()->id}}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="@if($users->name == '0'){{""}}@else{{$users->name}}@endif" placeholder="@if($users->name == '0'){{"Por Definir"}}@endif" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                </div>
                        <div class="row mb-3">
                                <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de Documento') }}</label>
                            <div class="col-md-6"> 
                            <select class="form-control" id="type" type="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{$people->documents->type}}"  autocomplete="type" autofocus>  
                                <option value="{{$people->id_documents}}" selected>{{$people->documents->type}}</option>
                                @foreach ($documents as $document)
                                <option value="{{$document->id}}">
                                  {{$document->type}}
                                </option>
                                @endforeach
                             </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="CC" class="col-md-4 col-form-label text-md-end">{{ __('Documento') }}</label>
                            
                            <div class="col-md-6">    
                                <input id="doc" type="number" class="form-control @error('') is-invalid @enderror" name="doc" value="{{$people->doc}}" required autocomplete="doc" autofocus>
                            </div> 
                        </div> 
                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Rol') }}</label>
                            
                            <div class="col-md-6"> 
                            <select id="role" class="form-control @error('') is-invalid @enderror" name="role" value="{{$users->roles->role}}" autocomplete="role" autofocus>  
                                <option value="{{$users->id_roles}}" selected>{{$users->roles->role}}</option>
                                @foreach ($roles as $role)
                                @if($users->id_roles == $role->id)
                                @else
                                <option value="{{$role->id}}">
                                  {{$role->role}}
                                </option>
                                @endif
                                @endforeach
                             </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end"> Tipo de Contrato </label><br>
                            <div class="col-md-6"> 
                            <select id="contract" class="form-control @error('') is-invalid @enderror" name="contract" value="{{$people->contracts->contract}}" required autocomplete="contract" autofocus>
                                <option value="{{$people->id_contracts}}" selected>{{$people->contracts->contract}}</option>
                                @foreach ($contracts as $contract)
                                <option value="{{$contract->id}}">
                                  {{$contract->contract}}
                                </option>
                                @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_i" class="col-md-4 col-form-label text-md-end">{{ __('Fecha Inicio') }}</label>
                            <div class="col-md-6">
                            <input id="date_i" type="date" class="form-control @error('') is-invalid @enderror" name="date_i" value="{{$people->date_i}}" required autocomplete="date_i" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_f" class="col-md-4 col-form-label text-md-end">{{ __('Fecha fin') }}</label>
                            <div class="col-md-6">
                            <input id="date_f" type="date" class="form-control @error('') is-invalid @enderror" name="date_f" value="{{$people->date_f}}" required autocomplete="date_f" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="onus" class="col-md-4 col-form-label text-md-end">{{ __('Cargo') }}</label>
                            <div class="col-md-6">
                            <input id="onus" type="text" class="form-control @error('') is-invalid @enderror" name="onus" value="@if($people->onus == '0'){{""}}@else{{$people->onus}}@endif" autocomplete="onus" autofocus placeholder="@if($people->onus == '0'){{"Por Definir"}}@endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="area" class="col-md-4 col-form-label text-md-end">{{ __('Área') }}</label>
                            <div class="col-md-6">
                            <input id="area" type="text" class="form-control @error('') is-invalid @enderror" name="area" value="@if($people->area == '0'){{""}}@else{{$people->area}}@endif" autocomplete="area" autofocus placeholder="@if($people->area == '0'){{"Por Definir"}}@endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="salary" class="col-md-4 col-form-label text-md-end">{{ __('Salario') }}</label>
                            <div class="col-md-6">
                            <input id="salary" type="number" class="form-control @error('') is-invalid @enderror" name="salary" value="@if($people->salary == '0'){{""}}@else{{$people->salary}}@endif" required autocomplete="salary" autofocus placeholder="@if($people->salary == '0'){{"Por Definir"}}@endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                                <label for="pay_per_hour" class="col-md-4 col-form-label text-md-end">{{ __('Pago por hora') }}</label>
                                <div class="col-md-6">
                                <input id="pay_per_hour" type="number" class="form-control @error('') is-invalid @enderror" name="pay_per_hour" value="@if($people->pay_per_hour == '0'){{""}}@else{{$people->pay_per_hour}}@endif" required autocomplete="pay_per_hour" autofocus placeholder="@if($people->pay_per_hour == '0'){{"Por Definir"}}@endif">
                                </div>
                        </div>
                        <div class="row">
                            <div class="col text-end">
                                <button type="submit" class="btn btn-blue px-3">
                                        {{ __('Enviar') }}
                                </button>
                            </div>
                            <div class="col ">
                                <a class="btn btn-danger" href="{{route('users.index')}}">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
