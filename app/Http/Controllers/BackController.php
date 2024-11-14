<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackController extends Controller
{
    // En BackController.php
    public function index()
    {
        return view('back.backHome'); // Vista para el back office
    }
}
