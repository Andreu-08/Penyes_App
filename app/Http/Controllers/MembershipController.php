<?php

namespace App\Http\Controllers;

use App\Models\Crew;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MembershipController extends Controller
{
    //funcion para controlar la confirmacion de la membresia
    public function confirm(Request $request, Crew $crew, User $user)
    {
        $crew->users()->updateExistingPivot($user->id, ['confirmed' => true]);

        return redirect()->back()->with('success', 'Membresía confirmada.');
    }

    // Método para obtener la lista de usuarios de una peña
    public function getUsers(Crew $crew)
    {
        $users = $crew->users()->get(['id', 'name']);
        return response()->json(['users' => $users]);
    }

    // Método para eliminar la relación de un usuario con una peña
    public function removeUser(Crew $crew, User $user)
    {
        $crew->users()->detach($user->id);
        return response()->json(['success' => true]);
    }
}
