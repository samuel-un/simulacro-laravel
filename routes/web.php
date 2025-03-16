<?php

use App\Http\Controllers\MostrarUsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsuariosValidaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UserController::class, 'index']);

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/mostarusuarios', [MostrarUsuariosController::class,'index']);

Route::get('/usuariosvalida', function () {
    return view('usuariosvalida');
});

Route::post('/usuariosvalida', [UsuariosValidaController::class,'store'])->name('usuarios.store');
