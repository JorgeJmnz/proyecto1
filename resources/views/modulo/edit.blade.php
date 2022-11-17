@extends('layouts.app')

@section('template_title')
    Update Modulo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Modulo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('modulos.update', $modulo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('modulo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>     
            <!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
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
