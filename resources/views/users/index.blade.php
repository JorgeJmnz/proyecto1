@extends('layouts.sb')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                       <h2> Lista de usuarios @can('users.create') <a  href="users/create"><button type="button" class="btn btn-success float-right"> Agregar usuario</button></a>@endcan</h2> 
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td scope="row">{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user->id)}}" method="POST">
                                            
                                            <a href="{{ route('users.show', $user->id )}}"><button type="button" class="btn btn-secondary">Ver</button></a>
                                            
                                            @can('users.edit')
                                            <a href="{{ route('users.edit', $user->id )}}"><button type="button" class="btn btn-primary">Editar</button></a>
                                            @endcan

                                            @csrf
                                            @can('users.destroy')
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                            @endcan
                                        </form>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="mx-auto">
                                {{$users->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection