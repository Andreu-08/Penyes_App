<?php

use App\Http\Controllers\DrawController;
use App\Http\Controllers\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('locations', LocationController::class)->only(['index']);

// Nueva ruta para obtener los datos del sorteo filtrado por año
Route::get('/draw/{year?}', [DrawController::class, 'jsonData']);



