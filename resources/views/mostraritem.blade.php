<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="float-right">
                            <a class="btn btn-primary" href="{{ route('catalogo.index') }}"> Back</a>
                        </div>
<div>
  <div >
    <h5 class="card-title">{{ $modulo->nombre }}</h5>
    
    <p  class="w-50 p-3" class="h-100 d-inline-block"><strong>Tipo:</strong>{{ $modulo->categoria->nombre }}</p>
    <p  class="w-50 p-3" class="h-100 d-inline-block"><strong>Descripción:</strong> {{ $modulo->descripcion }}</p>
    <p  class="w-50 p-3" class="h-100 d-inline-block"><strong>Encargado:</strong> {{ $modulo->encargado->nombre}}</p>
    <p  class="w-50 p-3" class="h-100 d-inline-block"><strong>Subestación:</strong> {{ $modulo->subestacione->nombre}}</p>
    <p  class="w-50 p-3" class="h-100 d-inline-block"><strong>Latitud:</strong>{{ $modulo->lat }}</p>
    <p  class="w-50 p-3" class="h-100 d-inline-block"><strong>Longitud:</strong>{{ $modulo->long }}</p>
    <p  class="w-50 p-3" class="h-100 d-inline-block"><strong>Cuadrante:</strong>{{ $modulo->cuadrante }}</p>
    <p  class="w-50 p-3" class="h-100 d-inline-block"><strong>Mantenimiento:</strong>{{ $modulo->mantenimiento }}</p>
    <p  class="w-50 p-3" class="h-100 d-inline-block"><strong>Fecha de mantenimiento:</strong>{{ $modulo->fechaman }}</p>
  </div>
  <img src="/imagen/{{$modulo->imagen}}"  style="width: 300px; height: 215px;" >
</div>