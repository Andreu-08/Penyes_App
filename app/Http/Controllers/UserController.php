<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Muestra una lista de todos los usuarios.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('back.users.index', compact('users'));
    }

    /**
     * Muestra el formulario para crear un nuevo usuario.
     */
    public function create()
    {
        return view('back.users.create');
    }

    /**
     * Almacena un nuevo usuario en la base de datos.
     */
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'birthday' => 'required|date',
            'password' => 'required|string|min:8|confirmed',
            
        ]);

        // Crear el usuario
        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'password' => bcrypt($request->input('password')),//contraseña encriptada
            'role' => 2,
        ]);

        return redirect()->route('back.users.index')->with('success', 'Usuario creado exitosamente.');
    }

    /**
     * Muestra la información de un usuario específico.
     */
    public function show(User $user)
    {
        return view('back.users.show', compact('user'));
    }

    /**
     * Muestra el formulario para editar un usuario específico.
     */
    public function edit(User $user)
    {
        return view('back.users.edit', compact('user'));
    }

    /**
     * Actualiza la información de un usuario en la base de datos.
     */
    public function update(Request $request, User $user)
    {
        // Validación de los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'birthday' => 'required|date',
            'password' => 'nullable|string|min:8|confirmed',
            
        ]);

        // Actualizar la información del usuario
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->role = 2;

        // Si se proporciona una nueva contraseña, actualizarla
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('back.users.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    /**
     * Elimina un usuario de la base de datos.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('back.users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
    
}
