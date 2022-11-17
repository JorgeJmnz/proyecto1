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
                            <strong>Categoría:</strong>
                            {{ $modulo->categoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $modulo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $modulo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Subestación:</strong>
                            {{ $modulo->subestacione->nombre}}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $modulo->lat }}
                        </div>
                        <div class="form-group">
                            <strong>Longitud:</strong>
                            {{ $modulo->long }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de mantenimiento:</strong>
                            {{ $modulo->fechaman }}
                        </div>
                        <div class="form-group">
                            <strong>Mantenimiento:</strong>
                            {{ $modulo->mantenimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <img src="/imagen/{{ $modulo->imagen}}" width="60%">
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
