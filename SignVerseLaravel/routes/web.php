<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SugerenciaController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('sexos', SexoController::class);

Route::resource('autores', AutorController::class)->parameters(['autores' => 'autor']);

Route::resource('users', UserController::class);

Route::resource('sugerencias', SugerenciaController::class);

Route::resource('sugerencias', SugerenciaController::class);


Auth::routes();

Route::get('/cliente/sugerencia', [SugerenciaController::class, 'formularioUsuario'])->name('cliente.sugerencia');

Route::post('/sugerencias/enviar', [SugerenciaController::class, 'store'])->name('sugerencias.store');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cliente/actividades', function () {
    return view('cliente.actividades');
});

Route::get('/cliente/evaluaciones', function () {
    return view('cliente.evaluaciones');
});

Route::get('/cliente/actividades/aprender-abecedario', function () {
    return view('cliente.actividades.aprenderAbc');
});

Route::get('/cliente/evaluaciones/evaluacionAbc', function () {
    return view('cliente.evaluaciones.evaluacionAbc');
});

Route::get('/admin/actividadesAdmin', function () {
    return view('admin.actividadesAdmin');
});

Route::get('/admin/evaluacionesAdmin', function () {
    return view('admin.evaluacionesAdmin');
});

Route::get('/errores/error404', function () {
    return view('errores.error404');
});

Route::get('/sugerencias/create', [SugerenciaController::class, 'create'])->name('sugerencias.create');

