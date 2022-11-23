<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $categoria->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
            <a href="{{ route('categorias.index') }}" ><button type="button" class="btn btn-danger float-left"> Cancelar </button></a>
            <button type="submit" class="btn btn-primary">Guardar</button>
         </div>
    </div>
</div>