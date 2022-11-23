<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modulos PDF</title>
</head>
<body>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                <th>No.</th>
                
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Subestación</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>Cuadrante</th>
                <th>Fecha de mantenimiento</th>
                <th>Mantenimiento realizado</th>
                <th>Imagen</th>

                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modulos as $modulo)
                <tr>
                    
                    
                    <td>{{ $modulo->categoria->nombre }}</td>
                    <td>{{ $modulo->nombre }}</td>
                    <td>{{ $modulo->descripcion }}</td>
                    <td>{{ $modulo->subestacione->nombre }}</td>
                    <td>{{ $modulo->lat }}</td>
                    <td>{{ $modulo->long }}</td>
                    <td>{{ $modulo->cuadrante }}</td>
                    <td>{{ $modulo->fechaman }}</td>
                    <td>{{ $modulo->mantenimiento }}</td>
                    <td>
                    <img src="/imagen/{{$modulo->imagen}}" width="30%">
                    </td>      
                    <td>
                        
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
