<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\AutorController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('sexos', SexoController::class);

Route::resource('autores', AutorController::class)->parameters(['autores' => 'autor']);


Auth::routes();

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



