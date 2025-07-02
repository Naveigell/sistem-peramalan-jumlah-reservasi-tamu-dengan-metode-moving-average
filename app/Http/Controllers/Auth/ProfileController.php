<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PasswordRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('auth.profile');
    }

    public function store(PasswordRequest $request)
    {
        $password = $request->validated('new_password');

        $user = auth()->user();
        $user->update(compact('password'));

        return redirect(route('auth.profile.create'))->with('success', 'Password updated successfully');
    }
}
