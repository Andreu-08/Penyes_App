<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    // En FrontController.php
    public function index()
    {
        return view('front.frontHome'); // Vista para el front office
    }
}
