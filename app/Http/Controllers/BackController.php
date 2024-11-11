<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    // En BackController.php
    public function dashboard()
    {
        return view('back.dashboard'); // Vista para el back office
    }
}
