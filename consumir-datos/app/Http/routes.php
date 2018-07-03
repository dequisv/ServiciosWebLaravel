<?php

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'ConsumoPersonasController@index');
Route::get('consumopersonas', 'ConsumoPersonasController@index');
Route::get('consumopersonas/agregar', 'ConsumoPersonasController@create');
Route::post('consumopersonas/agregar', 'ConsumoPersonasController@store');
Route::get('consumopersonas/{id}', 'ConsumoPersonasController@show');
Route::get('consumopersonas/{id}/editar', 'ConsumoPersonasController@edit');
Route::post('consumopersonas/{id}/editar', 'ConsumoPersonasController@update');
Route::post('consumopersonas/{id}/eliminar', 'ConsumoPersonasController@destroy');
Route::get('departamentos', 'DepartamentosController@index');