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
        <div class="well well bs-component">
            <form class="form-horizontal">
                    <fieldset>
                        <legend>Crear Persona</legend>
                        <div class="form-group">
                            <label for="nombre" class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{!! $dato->nombre !!}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellido" class="col-lg-2 control-label">Apellido</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="apellido" name="apellido" value="{!! $dato->apellido !!}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dui" class="col-lg-2 control-label">DUI</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="dui" name="dui" value="{!! $dato->dui !!}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaNacimiento" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{!! $dato->fechaNacimiento !!}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </fieldset>
            </form>
        </div>
    </div>
    </body>
</html>