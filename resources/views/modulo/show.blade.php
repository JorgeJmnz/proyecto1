@extends('layouts.app')

@section('template_title')
    {{ $modulo->name ?? 'Show Modulo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Modulo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('modulos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $modulo->categoria_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $modulo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $modulo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Subestacion Id:</strong>
                            {{ $modulo->subestacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Lat:</strong>
                            {{ $modulo->lat }}
                        </div>
                        <div class="form-group">
                            <strong>Long:</strong>
                            {{ $modulo->long }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaman:</strong>
                            {{ $modulo->fechaman }}
                        </div>
                        <div class="form-group">
                            <strong>Mantenimiento:</strong>
                            {{ $modulo->mantenimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $modulo->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
