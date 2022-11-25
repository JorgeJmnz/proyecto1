<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventarios PDF</title>
    
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: 5px;
            text-align : center;
            
            align: center;
            margin-left: auto;
            margin-right: auto;
            outline: 10px;

            width: 120px;
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
    <div >
        <div>
            <table>
                <thead >
                    <tr>
                        
                        
                        <th>Modulo</th>
                        <th>Panel</th>
                        <th>Puerto del panel</th>
                        <th>Distancia en mts</th>
                        <th>Ubicación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventarios as $inventario)
                        <tr>
                           
                            
                            <td>{{ $inventario->modulo->nombre }}</td>
                            <td>{{ $inventario->Panel }}</td>
                            <td>{{ $inventario->Puertopanel }}</td>
                            <td>{{ $inventario->Distancia }}</td>
                            <td>{{ $inventario->Ubicacion }}</td>

                    
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>