<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Modulo') }}
            {{ Form::select('modulo_id', $modulos, $inventario->modulo_id, ['class' => 'form-control' . ($errors->has('modulo_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el modulo a inventarear']) }}
            {!! $errors->first('modulo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Panel') }}
            {{ Form::text('Panel', $inventario->Panel, ['class' => 'form-control' . ($errors->has('Panel') ? ' is-invalid' : ''), 'placeholder' => 'Panel']) }}
            {!! $errors->first('Panel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Puerto del panel') }}
            {{ Form::text('Puertopanel', $inventario->Puertopanel, ['class' => 'form-control' . ($errors->has('Puertopanel') ? ' is-invalid' : ''), 'placeholder' => 'Puerto de panel']) }}
            {!! $errors->first('Puertopanel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Distancia') }}
            {{ Form::text('Distancia', $inventario->Distancia, ['class' => 'form-control' . ($errors->has('Distancia') ? ' is-invalid' : ''), 'placeholder' => 'Distancia en mts']) }}
            {!! $errors->first('Distancia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ubicacion') }}
            {{ Form::text('Ubicacion', $inventario->Ubicacion, ['class' => 'form-control' . ($errors->has('Ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicación']) }}
            {!! $errors->first('Ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
            <a href="{{ route('inventarios.index') }}" ><button type="button" class="btn btn-danger float-left"> Cancelar </button></a>
            <button type="submit" class="btn btn-primary">Guardar</button>
         </div>
    </div>
</div>