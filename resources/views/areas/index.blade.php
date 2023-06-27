@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a name="" id="" class="btn btn-success" href="{{route('areas.create')}}" role="button">Crear Areas</a>
    </div>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                <tr class="">
                    <td>{{$area->name}}</td>
                    <td>
                        <div class="btn-group">
                            <a name="" id="" class="btn btn-primary" href="{{route('areas.edit', $area->id)}}" role="button">Editar</a>
                            <form action="{{route('areas.destroy', $area->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                            <input type="hidden" name="id" value="{{$area->id}}">
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
@endsection

    
</body>