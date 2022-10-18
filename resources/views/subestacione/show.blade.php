@extends('layouts.app')

@section('template_title')
    {{ $subestacione->name ?? 'Show Subestaciones' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Subestaciones</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subestaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $subestacione->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
