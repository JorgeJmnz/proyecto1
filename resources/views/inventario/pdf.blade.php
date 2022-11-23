<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventarios PDF</title>
    
    <link  href="{{public_path('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        
                        
                        <th>Modulo</th>
                        <th>Panel</th>
                        <th>Puerto del panel</th>
                        <th>Distancia en mts</th>
                        <th>Ubicación</th>

                        <th></th>
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