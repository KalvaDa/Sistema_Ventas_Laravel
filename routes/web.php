<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios','UserController@index');

Route::get('/usuarios/{id}','UserController@show');

Route::get('/clientes/{nombre}', function ($nombre) {
    return "Hola soy {$nombre}";
});

Route::get('/vendedores/{name}', function ($name) {
})->where('name', '[A-Za-z]+');

// En este caso no pasa parametros por que la clase es de una sola funcion , se usa el metodo __invoke
Route::get('/personas/{nombre}/{apellido?}','WelcomeUserController');


