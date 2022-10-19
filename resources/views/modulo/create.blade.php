@extends('layouts.app')

@section('template_title')
    Create Modulo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Agregar Módulo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('modulos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('modulo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script>   
    $(document).ready(function (e) {   
        $('#imagen').change(function(){            
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#imagenSeleccionada').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script> 
    </section>
   
@endsection
