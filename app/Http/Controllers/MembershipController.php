<?php

namespace App\Http\Controllers\Back;

use App\Models\Crew;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembershipController extends Controller
{
    public function confirm(Request $request, Crew $crew, User $user)
    {
        $crew->users()->updateExistingPivot($user->id, ['confirmed' => true]);

        return redirect()->back()->with('success', 'Membresía confirmada.');
    }
}
