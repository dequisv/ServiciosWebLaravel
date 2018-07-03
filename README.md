# Servicios web RESTful utilizando Laravel PHP Framework
La presente es una guía para las instituciones públicas de El Salvador a fin de que puedan automatizar servicios utilizando la tecnología php con laravel.

## Entorno de Desarrollo
* XAMPP
* php 5.6
* Laravel 5.0
* MySQL 5.4
* Visual Studio Code

## Instalación
1. Instalar [XAMPP](https://www.apachefriends.org/es/index.html)/[WAMP](http://www.wampserver.es/)
2. Instalar [Composer](https://getcomposer.org/download/)

## Configuración de Entorno
1. Configuración archivo hosts
```
127.0.0.1	proveer-datos
127.0.0.1	consumir-datos
``` 
2. Crear VirtualHost
Modificar archivo httpd-vhost.conf
```
<VirtualHost proveer-datos:80>
  DocumentRoot "...\xampp\htdocs\proveer-datos\public"
  ServerAdmin proveer-datos
  <Directory "...\xampp\htdocs\proveer-datos">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
  </Directory>
</VirtualHost>

<VirtualHost consumir-datos:80>
  DocumentRoot "...\xampp\htdocs\consumir-datos\public"
  ServerAdmin consumir-datos
  <Directory "...\xampp\htdocs\consumir-datos">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
  </Directory>
</VirtualHost>
```

## Preparar base de datos
En este ejemplo se utiliza una [base de datos de personas](/proveer-datos/PrepararBD.md), puede encontrar sus instrucciones a [continuación](/proveer-datos/PrepararBD.md)

## Proveer Datos
Si la institución quiere proveer datos(publicar API) a otras instituciones, puede seguir las instrucciones en [esta pagina](/api-rest)

## Consumir Datos
Si la institución requiere consumir datos(consumir API) de otra institución haciendo uso de servicios web, puede seguir las instrucciones en [esta pagina](/consumir-api)

## Configurar entorno de pruebas
Para garantizar el funcionamiento despues de realizar cambios, puede preparar el 
[entorno de pruebas](/EntornoPruebas.md) como se detalla a [continuación](/EntornoPruebas.md)

## Estandarización URI
Uno de los principios de los servicios web RESTful es contar con la [estandarización de URI](https://github.com/egobsv/EstandaresInteroperabilidad/blob/master/Desarrollo.md#buenas-pr%C3%A1cticas-1) que permiten el acceso unificado a los recursos.
| Verbo |	URI |	Acción | Ruta |
| ----- |	----- |	----- | ----- |
| GET |	/personas |	index |	personas.index |
| GET	| /personas/create	| create |	personas.create |
| POST | /personas	| store |	personas.store |
| GET	| /personas/{personas} |	show	| personas.show |
| GET	| /personas/{personas}/edit |	edit |	personas.edit |
| PUT/PATCH |	/personas/{personas} | update | personas.update |
| DELETE | /personas/{personas} |	destroy	| personas.destroy |

## Referencias
[Estandares de interoperabilidad de gobierno de El Salvador](https://github.com/egobsv/EstandaresInteroperabilidad)

[Libreria Faker](https://github.com/fzaninotto/Faker#fakerprovideren_usperson) para creación de data.

## Licencia
Este trabajo esta cubierto dentro de la estrategia de desarrollo de servicios de Gobierno Electrónico del Gobierno de El Salvador y como tal es una obra de valor público sujeto a los lineamientos de la Política de Datos Abiertos y la licencia [CC-BY-SA](https://creativecommons.org/licenses/by-sa/3.0/deed.es).