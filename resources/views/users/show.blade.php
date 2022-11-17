@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h3 class="display-4">{{$user->name}}</h3>
      <p class="lead">{{$user->email}}</p>
      <a href="{{ route('users.edit', $user->id )}}"><button type="button" class="btn btn-primary">Editar</button></a>
    </div>
  </div>
@endsection