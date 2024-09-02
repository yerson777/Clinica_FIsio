<?php

use Illuminate\Support\Facades\Route;
use App\Models\Filiacion;

Route::get('/', function () {
    return view('auth.login');

});

Route::resource('filiacions', 'App\Http\Controllers\FiliacionController');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
