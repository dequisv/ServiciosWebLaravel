<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Persona</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>
    <div class="container">
    @foreach($datos as $dato)
        <h1>Mostrando Persona</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DUI</th>
                    <th>Fecha de Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                
                        <tr>
                            <td>
                                <a href="consumopersonas/{{$dato->id}}"> 
                                    {!! $dato->id !!}
                                </a>
                            </td>
                            <td>{!! $dato->nombre !!}</td>
                            <td>{!! $dato->apellido !!}</td>
                            <td>{!! $dato->dui !!}</td>
                            <td>{!! $dato->fechaNacimiento !!}</td>
                        </tr>
            </tbody>
        </table>
        <br>    
        <a href="/" class="btn btn-info">Regresar</a>
        <a href="{!! action('ConsumoPersonasController@edit', $dato->id) !!}" class="btn btn-info">Editar</a>
        
        <form method="post" action="{!! action('ConsumoPersonasController@destroy', $dato->id) !!}" class="pull-left">
            <!--<input type="hidden" name="_token" value="{!! csrf_token() !!}">-->
                <div>
                    <button type="submit" class="btn btn-warning">Eliminar</button>
                </div>
        </form>
        
        
        <br>   
        @endforeach
    </div>
</body>
</html>