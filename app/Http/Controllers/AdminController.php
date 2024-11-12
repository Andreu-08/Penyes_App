<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Muestra el dashboard del administrador.
     */
    public function dashboard()
    {
        return view('back.dashboard'); // Asegúrate de tener esta vista creada en resources/views/back/dashboard.blade.php
    }
}
