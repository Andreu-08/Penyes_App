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
use App\Http\Controllers\Front\FrontCrewController;
use App\Http\Controllers\Front\UserCrewController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Back\MembershipController;

//muestra la vista home en la ruta /
Route::get('/', function () {
    return view('home.home');
});


//rutas para la vista contacto
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

//autenticación de usuario y rol
    Route::get('/log', function () {
        // Verificar el rol del usuario
        if (Auth::check()) {
            $role = Auth::user()->role_id;
            if ($role == 1) {
                return redirect()->route('back.backHome'); // Redirige al dashboard del back office
            } else {
                return redirect()->route('front.frontHome'); // Redirige a la página principal del front office
            }
        }
        return redirect()->route('login'); // Redirige a login si no está autenticado
    })->name('log');

    //rutas para el perfil del usuario 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//Rutas de enlaces para el back office
Route::middleware(['auth', CheckRole::class . ':1'])->prefix('back')->group(function () {
    // Ruta principal del back office
    Route::get('/', [BackController::class, 'index'])->name('back.backHome');

    // Rutas de crud completas utilizando resource
    
    //usuarios
    Route::resource('users', UserController::class)->names('back.users');
    // Enviar correo de contacto al usuario
        Route::post('/back/users/{user}/contact', [BackController::class, 'sendBackContactMessage'])->name('back.users.contact');

    //crews
    Route::resource('crews', CrewController::class)->names('back.crews');

    //platforms
    Route::resource('platforms', PlatformController::class)->names('back.platforms');

    //draws
    Route::resource('draws', DrawController::class)->names('back.draws');

    //payments
    Route::resource('payments', PaymentController::class)->names('back.payments');

    // Rutas para manejar las solicitudes de membresía
    Route::post('memberships/{crew}/{user}/confirm', [MembershipController::class, 'confirm'])->name('back.memberships.confirm');
});


// Rutas de enlaces para el Front Office
Route::middleware(['auth', CheckRole::class . ':2'])->prefix('front')->group(function () {
    // Ruta principal del Front Office
    Route::get('/', [FrontController::class, 'index'])->name('front.frontHome');

    // Rutas de CRUD completas utilizando resource

    // Crews (Peñas)
    Route::resource('crews', FrontCrewController::class)->names('front.crews');

    // Draws (Sorteos)
    Route::resource('draws', DrawController::class)->names('front.draws');

    // Perfil de Usuario
    Route::get('/profile', [FrontController::class, 'profile'])->name('front.profile');

    // Enviar solicitud de unión a una peña
    Route::post('/crews/{crew}/join', [CrewController::class, 'joinRequest'])->name('front.crews.join');

    // Pagos relacionados con las peñas
    Route::resource('payments', PaymentController::class)->names('front.payments');

    // Ruta para solicitar membresía
    Route::post('crews/{crew}/request-membership', [UserCrewController::class, 'requestMembership'])->name('front.crews.requestMembership');
});




require __DIR__.'/auth.php';
