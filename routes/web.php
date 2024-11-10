<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//muestra la vista home en la ruta /
Route::get('/', function () {
    return view('home.home');
});

//muestra la vista contacto en la ruta /contact
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


Route::get('/log', function () {
    return view('log');
})->middleware(['auth', 'verified'])->name('log');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
