<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRol;

// Rutas Públicas
Route::get('/', function () { 
    return view('welcome'); 
})->name('home');

Route::get('/login', function () { 
    return view('auth.login'); 
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', function () { 
    return view('auth.register'); 
})->name('register');

Route::get('/soporte', function () { 
    return view('soporte'); 
})->name('soporte');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas Protegidas por Autenticación y Rol
Route::middleware(['auth'])->group(function () {

    // Dashboard Administrador
    Route::middleware([CheckRol::class . ':administrador'])->prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });

    // Dashboard Capturista
    Route::middleware([CheckRol::class . ':capturista'])->prefix('capturista')->group(function () {
        Route::get('/dashboard', function () {
            return view('capturista.dashboard');
        })->name('capturista.dashboard');
    });

});