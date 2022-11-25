@extends('layouts.sb')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Agregar Usuario</span>
                    </div>
                    <div class="card-body">
                        <h4>Usuario: {{$user->name}}</h4>
 
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                        @method('PATCH')
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="Introduzca un nombre">
                              </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="Introduzca un correo electrónico">
                                <div class="mb-3">
                                  <label for="password" class="form-label">Password</label>
                                  <input type="password" class="form-control" value="{{old($user->password)}}" name="password" placeholder="Introduzca una contraseña">
                                </div>
                                <a href="/users"><button type="button" class="btn btn-danger float-left"> Cancelar </button></a>
                                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                              </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection