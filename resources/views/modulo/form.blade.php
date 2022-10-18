<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categoria_id') }}
            {{ Form::select('categoria_id', $categorias , $modulo->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $modulo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $modulo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('subestacion_id') }}
            {{ Form::select('subestacion_id', $subestaciones , $modulo->subestacion_id, ['class' => 'form-control' . ($errors->has('subestacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Subestacion']) }}
            {!! $errors->first('subestacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('lat') }}
            {{ Form::text('lat', $modulo->lat, ['class' => 'form-control' . ($errors->has('lat') ? ' is-invalid' : ''), 'placeholder' => 'Latitud']) }}
            {!! $errors->first('lat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('long') }}
            {{ Form::text('long', $modulo->long, ['class' => 'form-control' . ($errors->has('long') ? ' is-invalid' : ''), 'placeholder' => 'Longigtud']) }}
            {!! $errors->first('long', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaman') }}
            {{ Form::text('fechaman', $modulo->fechaman, ['class' => 'form-control' . ($errors->has('fechaman') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de mantenimiento']) }}
            {!! $errors->first('fechaman', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mantenimiento') }}
            {{ Form::text('mantenimiento', $modulo->mantenimiento, ['class' => 'form-control' . ($errors->has('mantenimiento') ? ' is-invalid' : ''), 'placeholder' => 'Mantenimiento realizado']) }}
            {!! $errors->first('mantenimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $modulo->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>