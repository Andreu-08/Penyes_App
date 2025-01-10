<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // Asegúrate de tener un Mailable para el envío

class ContactController extends Controller
{
    // Muestra la vista de contacto
    public function show()
    {
        return view('home.contact'); // Asegúrate de que la vista esté en resources/views/home/contact.blade.php
    }

    // Maneja el envío del formulario
    public function send(Request $request)
    {
        // Validación de los campos
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Enviar el mensaje de contacto
        Mail::to('admin@example.com')->send(new ContactFormMail($request->all()));

        // Redirigir con un mensaje de éxito
        return redirect()->route('contact.show')->with('success', 'Mensaje enviado correctamente');
    }
}

