<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // Asegúrate de tener el Mailable para el envío
use App\Mail\ContactFormMail2;
use App\Models\User;


class ContactController extends Controller
{
    // Muestra la vista de contacto en el home
    public function show()
    {
        return view('home.contact'); // Asegúrate de que esta vista esté en resources/views/home/contact.blade.php
    }
    // Método para enviar mensaje de contacto desde el back-office
    public function sendBackContactMessage(Request $request, $userId)
    {
        // Validación de los campos
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Obtener el usuario al que se enviará el mensaje
        $user = User::findOrFail($userId);

        // Preparar los detalles del mensaje
        $details = [
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Enviar el mensaje al correo del usuario
        Mail::to($user->email)->send(new ContactFormMail($details, 'emails.userContact'));

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Mensaje enviado al usuario correctamente');
    }
}
