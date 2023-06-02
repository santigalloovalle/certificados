@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="contHome col-md-8 gy-5">
            <div class="card mt-5">
                <div class="card-body text-center fs-3 p-5 m-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Solicitud Procesada') }}
                    <p class="fs-5 mt-3">Podrás descargar tu certificado proximamente </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
