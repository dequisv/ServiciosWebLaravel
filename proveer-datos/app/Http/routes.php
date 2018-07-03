<?php

//Route::get('/', 'WelcomeController@index');
//Route::get('home', 'HomeController@index');

Route::resource('personas','PersonaController',['only'=>['index','show','destroy','update','store']]);
//->only('store', 'index', 'show', 'update')
//->except('destroy', 'create', 'edit')
