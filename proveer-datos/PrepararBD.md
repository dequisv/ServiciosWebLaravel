## Poblar Base de Datos
1. Descargar/Instalar libreria [fzaninotto/faker](https://github.com/fzaninotto/Faker)
```
composer require fzaninotto/faker --dev
```

2. Actualizar información del cargador automático
```
composer dump-autoload
```

3. Crear clase PersonaSeeder.php
``` php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Persona;
use Faker\Factory as Faker;

class PersonaSeeder extends Seeder {
    
    public function run()
    {
        $faker=Faker::create();
        for($i=0; $i<3; $i++)
        {
            Persona::create
            ([
                'dui'=>$faker->randomNumber(9),
                'nombre'=>$faker->firstName(),
                'apellido'=>$faker->lastName (),
                'fechaNacimiento'=>$faker->date()
            ]);
        }
    }
}
``` 

4. En clase DatabaseSeeder.php llamar a nuestra clase seeder
``` php
public function run()
	{
		$this->call('PersonaSeeder');
	}
```
5. Poblar base de datos 
```
php artisan db:seed
```
