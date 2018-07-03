## Construcción del Proyecto
1. Crear proyecto
```
composer create-project laravel/laravel=5.0 proveer-datos
##
```
2. Crear modelo Persona
``` php
<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Persona extends Model{
    protected $table="personas";
    protected $fillable=array("dui","nombre", "apellido", "fechaNacimiento");
}
```

3. Crear la Base de Datos

4. Crear Migración de Base de Datos
```
php artisan make:migration persona_migration --create=personas
```

5. Crear tabla en archivo de migración
```php
public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('dui');
			$table->string('nombre');
			$table->string('apellido');
			$table->date('fechaNacimiento');
			$table->timestamps();
		});
	}
```
6. Crear tabla migrations en BD
```
php artisan migrate:install
```

7. Crear tabla(s) en BD
```
php artisan migrate
```

8. Crear controladores REST
```
php artisan make:controller PersonaController
```

9. Agregar ruta en archivo routes.php 
```
Route::resource('persona','PersonaController');
```

10. Se puede verificar las URI para personas
```
php artisan route:list
``` 

11. Metodo GET  
``` php
public function index()
	{
		return response()->json(['datos'=>Persona::all()],200);
	}
``` 

12. Metodo PUT
``` php
public function update(Request $request, $id)
	{
		$metodo=$request->method();
		$persona=Persona::find($id);
		if($metodo==="PATCH"){
			$nombre=$request->get('nombre');
			if($nombre!=null && $nombre!=' '){
				$persona->nombre=$nombre;
				$persona->apellido=$apellido;
				$persona->fechaNacimiento=$fechaNacimiento;
			}
			$persona->save();
			return response()->json(['mensaje'=>'Registro actualizado','codigo'=>'204'],204);
		}
		$nombre=$request->get('nombre');
		$apellido=$request->get('apellido');
		if (!$nombre || !$apellido)
		{
			return response()->json(['mensaje'=>'El nombre o apellido no pueden ser nulos','codigo'=>'400'],400);
		}
		$persona->nombre=$nombre;
		$persona->apellido=$apellido;
		$persona->save();
		return response()->json(['mensaje'=>'Persona actualizada','codigo'=>'200'],200);
	}
``` 

13. Metodo POST
```php
public function store(Request $request)
	{
		if(!$request->get('dui') || !$request->get('nombre') || !$request->get('apellido') || !$request->get('fechaNacimiento')){
			return response()->json(['mensaje'=>'Datos incompletos'],400);
		}
		Persona::create($request->all());
		return response()->json(['mensaje'=>'Persona creada'],201);
	}

``` 

14. Metodo DELETE
``` php
public function destroy($id)
	{
		$persona=Persona::find($id);
		if(!$persona){
			return response()->json(['mensaje'=>'Persona no existe','codigo'=>'400'],400);
		}
		$persona->delete();
		return response()->json(['mensaje'=>'Persona eliminada','codigo'=>'204'],204);
		
	}
``` 



