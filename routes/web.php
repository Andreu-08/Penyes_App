<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\CheckRole;

//muestra la vista home en la ruta /
Route::get('/', function () {
    return view('home.home');
});

// Rutas para el Front Office (Usuarios con rol 2)
Route::middleware(['auth'])->group(function () {
    // Ruta protegida para el rol de administrador
    Route::get('/back', [BackController::class, 'dashboard'])
        ->middleware(CheckRole::class . ':1')
        ->name('back.dashboard');

    // Ruta para usuarios regulares (rol 2)
    Route::get('/front', [FrontController::class, 'index'])
        ->middleware(CheckRole::class . ':2')
        ->name('front.index');
});

//rutas para la vista contacto
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


//rutas para el log
Route::get('/log', function () {
    return view('front.log');
})->middleware(['auth', 'verified'])->name('log');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
