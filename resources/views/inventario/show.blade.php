@extends('layouts.sb')

@section('template_title')
    {{ $inventario->name ?? 'Show Inventario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Modulo:</strong>
                            {{ $inventario->modulo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Panel:</strong>
                            {{ $inventario->Panel }}
                        </div>
                        <div class="form-group">
                            <strong>Puerto del panel:</strong>
                            {{ $inventario->Puertopanel }}
                        </div>
                        <div class="form-group">
                            <strong>Distancia en mts:</strong>
                            {{ $inventario->Distancia }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicación:</strong>
                            {{ $inventario->Ubicacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
