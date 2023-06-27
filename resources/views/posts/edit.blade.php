@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-dark bg-light">
      <div class="card-body">
        <form action="{{route('posts.update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
              <label for="name" class="form-label">Nombre:</label>
              <input type="name" class="form-control" value="{{$post->name}}" placeholder="Ingrese Nombre" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
          </form>
      </div>
    </div>
</div>
@endsection

    
</body>