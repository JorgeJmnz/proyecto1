@extends('layouts.app')

@section('template_title')
    Modulo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Modulo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('modulos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No.</th>
                                        
										<th>Categoría</th>
										<th>Nombre</th>
										<th>Descripción</th>
										<th>Subestación</th>
										<th>Latitud</th>
										<th>Longitud</th>
										<th>Fecha de mantenimiento</th>
										<th>Mantenimiento realizado</th>
										<th>Imagen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($modulos as $modulo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $modulo->categoria->nombre }}</td>
											<td>{{ $modulo->nombre }}</td>
											<td>{{ $modulo->descripcion }}</td>
											<td>{{ $modulo->subestacione->nombre }}</td>
											<td>{{ $modulo->lat }}</td>
											<td>{{ $modulo->long }}</td>
											<td>{{ $modulo->fechaman }}</td>
											<td>{{ $modulo->mantenimiento }}</td>
                                            <td>
                                            <img src="/imagen/{{$modulo->imagen}}" width="30%">
                                            </td>      
                                            <td>
                                                <form action="{{ route('modulos.destroy',$modulo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('modulos.show',$modulo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('modulos.edit',$modulo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $modulos->links() !!}
            </div>
        </div>
    </div>
@endsection
