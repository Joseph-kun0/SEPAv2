<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/soporte', function () {
    return view('soporte');
})->name('soporte');

// Rutas Públicas
Route::get('/', function () { return view('welcome'); });
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas Protegidas por Autenticación y Rol
Route::middleware(['auth'])->group(function () {
    
    // Dashboard Administrador
    Route::middleware(['role:administrador'])->prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });

    // Dashboard Capturista
    Route::middleware(['role:capturista'])->prefix('capturista')->group(function () {
        Route::get('/dashboard', function () {
            return view('capturista.dashboard');
        })->name('capturista.dashboard');
    });

});