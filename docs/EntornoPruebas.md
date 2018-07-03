## Configurar entorno de pruebas
Para configurar el entorno de pruebas en Laravel ocupando las clases de pruebas unitarias, puede seguir los siguientes pasos:

1. Para realizar pruebas
```
vendor/bin/phpunit
```

2. Es posible asignar alias para realizar pruebas
```
alias tst=vendor/bin/phpunit
```

3. Generar clase de pruebas
```
php artisan make:test PersonasModuleTest
```
