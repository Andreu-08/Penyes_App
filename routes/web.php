<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\DrawController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Auth;

//muestra la vista home en la ruta /
Route::get('/', function () {
    return view('home.home');
});


Route::middleware(['auth'])->group(function () {
    // // Ruta protegida para el rol de administrador
    // Route::get('/back', [BackController::class, 'index'])
    //     ->middleware(CheckRole::class . ':1')
    //     ->name('back.index');

    // Ruta para usuarios regulares (rol 2)
    Route::get('/front', [FrontController::class, 'index'])
        ->middleware(CheckRole::class . ':2')
        ->name('front.index');
});

//rutas para la vista contacto
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


    Route::get('/log', function () {
        // Verificar el rol del usuario
        if (Auth::check()) {
            $role = Auth::user()->role;
            if ($role == 1) {
                return redirect()->route('back.backHome'); // Redirige al dashboard del back office
            } else {
                return redirect()->route('front.index'); // Redirige a la página principal del front office
            }
        }
        return redirect()->route('login'); // Redirige a login si no está autenticado
    })->name('log');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//Rutas de enlaces para el back office
Route::middleware(['auth', CheckRole::class . ':1'])->prefix('back')->group(function () {
    // Ruta principal del back office
    Route::get('/', [BackController::class, 'index'])->name('back.backHome');

    // Rutas resource para usuarios, crews, platforms, draws y payments
    Route::resource('users', UserController::class)->names('back.users');
    Route::resource('crews', CrewController::class)->names('back.crews');
    Route::resource('platforms', PlatformController::class)->names('back.platforms');
    Route::resource('draws', DrawController::class)->names('back.draws');
    Route::resource('payments', PaymentController::class)->names('back.payments');
});

require __DIR__.'/auth.php';
