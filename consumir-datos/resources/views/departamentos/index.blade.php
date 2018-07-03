!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Departamentos</title>
    <link rel="stylesheet" href="/css/app.css" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="main.js"></script>-->
</head>
<body>
    <div class="container">
        <h1>Departamentos</h1>
        <!--@foreach ($departamentos as $departamento)
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ $departamento->nombre}}
                </div>
            </div>
        @endforeach-->
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>ISO31662</th>
                            <th>ID Pais</th>
                            <th>Codigo RNPN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departamentos as $departamento)
                            <tr>
                                <td>{!! $departamento->id !!}</td>
                                <td>{!! $departamento->nombre !!}</td>
                                <td>{!! $departamento->iso31662 !!}</td>
                                <td>{!! $departamento->idPais !!}</td>
                                <td>{!! $departamento->codigoRnpn !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>