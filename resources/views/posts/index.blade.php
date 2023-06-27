@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a name="" id="" class="btn btn-success" href="{{route('posts.create')}}" role="button">Crear posts</a>
    </div>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Area</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr class="">
                    <td>{{$post->name}}</td>
                    <td>{{$post->areas->name}}</td>
                    <td>
                        <div class="btn-group">
                            <a name="" id="" class="btn btn-primary" href="{{route('posts.edit', $post->id)}}" role="button">Editar</a>
                            <form action="{{route('posts.destroy', $post->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                            <input type="hidden" name="id" value="{{$post->id}}">
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