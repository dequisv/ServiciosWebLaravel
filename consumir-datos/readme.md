# Consumo de Servicios Web RESTful con Laravel
En esta sección se documenta la forma de consumir datos a través de servicios we web RESTful con Laravel.

Es posible contar con APIs públicas como la del [Ministerio de Salud](#https://api.salud.gob.sv/), en donde es posible realizar consulta sobre los principales catálogos que se utilizan en el servicio de CUN o registro de nacimientos. Al mismo tiempo es posible consultar otros catálogos de común interés para las demás instituciones como:
* Departamento
* Municipio
* Pais

##Escenario 
Para poder consumir datos de un servicio web con Laravel, es importante tener en cuenta las clases necesarias para hacer una llamada de servicio a través del protocolo HTTP.

Para php, así como para la mayoría de lenguajes de programación existen diversas librerías que facilitan el uso y consumo de servicios web RESTful, en esta guía se utilizará [Guzzle](#https://github.com/guzzle/guzzle).

Implementando Guzzle como librería que facilita la creación de cliente HTTP, se debe tomar en cuenta que otras clases se ocupar para el consumo de servicios web. 

Como primer caso se puede tener una app que solo consulte a un servicio para poblar una base de datos, bajo este escenario solamente bastaria con tener un controlador que se encargaria de hacer la llamada al servicio web y luego poblar la tabla especifica(cualquier otra operación que se requiera).

![Alt text](../docs/img/2.png?raw=true "Servicio de consulta")

Como segundo caso, se puede tener un formulario web en el cual los usuario iteractuan con las diversas funciones de los servicios web.

![Alt text](../docs/img/1.png?raw=true "solicitud de servicio web desde formularios")







## Desarrollo de servicio de consumo.
1. Instalación de Guzzle por medio de composer
```
composer require guzzlehttp/guzzle
```

2. Crear controlador
```
php artisan make:controller ConsumirController
```

 


