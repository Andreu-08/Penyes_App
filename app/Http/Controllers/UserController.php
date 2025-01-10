<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Muestra una lista de todos los usuarios.
     */
    public function index(Request $request)
    {
        // Obtener el término de búsqueda desde el formulario
        $search = $request->input('search');
        
        // Construir la consulta inicial excluyendo administradores
        $query = User::where('role_id', '!=', Role::ADMIN);

        // Si hay un término de búsqueda, agregar condiciones
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Obtener los usuarios paginados excluyendo administradores
        $users = $query->paginate(10);

        // Obtener los últimos 3 usuarios excluyendo administradores
        $lastUsers = User::where('role_id', '!=', Role::ADMIN)->latest()->take(3)->get();

        // Pasar datos a la vista
        return view('back.users.index', compact('users', 'lastUsers', 'search'));
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
            'role_id' => 2,
        ]);

        return redirect()->route('back.users.index')->with('success', 'Usuario creado exitosamente.');
    }

    /**
     * Muestra la información de un usuario específico.
     */
    public function show(User $user)
    {
        // Obtener las solicitudes de membresía del usuario
        $membershipRequests = $user->crews()->wherePivot('confirmed', false)->get();

        return view('back.users.show', compact('user', 'membershipRequests'));
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'birthday' => 'required|date',
            'password' => 'nullable|string|min:8|confirmed',
            'role_id' => 'required|in:1,2',
            
        ]);

        // Actualizar la información del usuario
        $user->update([
            'name' => $validated['name'],
            'surname' => $validated['surname'],
            'birthday' => $validated['birthday'],
            'email' => $validated['email'],
            'role_id' => $validated['role_id'],
        ]);

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
