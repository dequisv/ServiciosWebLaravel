<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Personas</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>
    <div class="container">
        <h1>Personas</h1>
        @if(session('estado'))
            <div class="alert alert-success">
                {{session('estado')}}
            </div>
        @endif
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
                @foreach($datos as $dato)
                    @foreach($dato as $persona)
                        <tr>
                            <td>
                                <a href="consumopersonas/{{$persona->id}}"> 
                                    {!! $persona->id !!}
                                </a>
                            </td>
                            <td>{!! $persona->nombre !!}</td>
                            <td>{!! $persona->apellido !!}</td>
                            <td>{!! $persona->dui !!}</td>
                            <td>{!! $persona->fechaNacimiento !!}</td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>    
    </div>
</body>
</html>