@extends('layouts.app')

@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="row row-cols-1 row-cols-md-4 g-4">


@foreach ($modulos as $modulo)

  <div class="col">
    <div class="card">
      <img src="/imagen/{{$modulo->imagen}}"  style="width: 300px; height: 215px;" >
      <div class="card-body">
        <h5 class="card-title">{{ $modulo->nombre }}</h5>
        <p>{{$modulo->categoria->nombre}}</p>
        <p class="card-text">{{ $modulo->descripcion }}</p>
        <a href="{{ route('users.edit', $user->id )}}"><button type="button" class="btn btn-primary">Show</button></a>
      </div>
    </div>
  </div>

@endforeach

</div>
@endsection
 
 