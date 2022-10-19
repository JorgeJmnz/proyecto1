<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Categoría') }}
            {{ Form::select('categoria_id', $categorias , $modulo->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la categoría']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $modulo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('descripcion', $modulo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Subestación') }}
            {{ Form::select('subestacion_id', $subestaciones , $modulo->subestacion_id, ['class' => 'form-control' . ($errors->has('subestacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la subestación']) }}
            {!! $errors->first('subestacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Latitud') }}
            {{ Form::text('lat', $modulo->lat, ['class' => 'form-control' . ($errors->has('lat') ? ' is-invalid' : ''), 'placeholder' => 'Latitud']) }}
            {!! $errors->first('lat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Longitud') }}
            {{ Form::text('long', $modulo->long, ['class' => 'form-control' . ($errors->has('long') ? ' is-invalid' : ''), 'placeholder' => 'Longitud']) }}
            {!! $errors->first('long', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de mantenimiento') }}
            {{ Form::text('fechaman', $modulo->fechaman, ['class' => 'form-control' . ($errors->has('fechaman') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de mantenimiento']) }}
            {!! $errors->first('fechaman', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Mantenimiento') }}
            {{ Form::text('mantenimiento', $modulo->mantenimiento, ['class' => 'form-control' . ($errors->has('mantenimiento') ? ' is-invalid' : ''), 'placeholder' => 'Mantenimiento realizado']) }}
            {!! $errors->first('mantenimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       <!--  
        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::text('imagen', $modulo->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div> 
        -->

                        <!-- Para ver la imagen seleccionada-->
                        <div class="grid grid-cols-1 mt-5 mx-7">
                            <img id="imagenSeleccionada" style="max-height: 250px;">           
                        </div>
        
                        <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
                            <div class='flex items-center justify-center w-full'>
                                <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                    <div class='flex flex-col items-center justify-center pt-7'>
                                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                                    </div>
                                <input name="imagen" id="imagen" type='file' class="hidden" />
                                </label>
                            </div>
                        </div>
        
                        <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                            <a href="{{ route('modulos.index') }}" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
                            <button type="submit" class='w-auto bg-green-500 hover:bg-green-700 rounded-lg shadow-xl font-medium border hover:text-white px-4 py-2'>Guardar</button>
                        </div>

    </div>
</div>