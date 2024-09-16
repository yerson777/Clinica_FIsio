<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiliacionController;
use App\Http\Controllers\SignosVitalController;

Route::get('/', function () {
    return view('auth.login');
});

// Rutas para Filiacion
Route::resource('filiacions', FiliacionController::class);

// Rutas para SignosVital
Route::resource('signos_vitales', SignosVitalController::class);

// Rutas protegidas
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
