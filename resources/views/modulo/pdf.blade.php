<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modulos PDF</title>
    <style>
       table,th,td{
            border: 1px solid black;
            border-collapse: 5px;
            text-align : center;
            
            align: center;
            margin-left: auto;
            margin-right: auto;
            outline: 10px;

            width: auto;
        }
        th{
            height: 50px;
        }
        
        body{
            font-family: verdana;
            position: center;
        }
    </style>
</head>
<body>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
           
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Encargado</th>
                <th>Subestación</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>Cuadrante</th>
                <th>Fecha de mantenimiento</th>
                <th>Mantenimiento realizado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modulos as $modulo)
                <tr>
                    
                    
                    <td>{{ $modulo->categoria->nombre }}</td>
                    <td>{{ $modulo->nombre }}</td>
                    <td>{{ $modulo->descripcion }}</td>
                    <td>{{ $modulo->encargado->nombre }}</td>
                    <td>{{ $modulo->subestacione->nombre }}</td>
                    <td>{{ $modulo->lat }}</td>
                    <td>{{ $modulo->long }}</td>
                    <td>{{ $modulo->cuadrante }}</td>
                    <td>{{ $modulo->fechaman }}</td>
                    <td>{{ $modulo->mantenimiento }}</td>     
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
