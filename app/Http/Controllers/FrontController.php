<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display the front office home page.
     */
    public function index()
    {
        return view('front.frontHome'); // Vista para el front office
    }
}
