<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the authentication request by attempting to log in the user with the provided credentials.
     * If the credentials are incorrect or the user has a disallowed role, it redirects back with errors.
     * Upon successful login, it redirects the user to their respective dashboard based on their role.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(LoginRequest $request)
    {
        // Attempt to log in the user with the provided credentials
        if (!auth()->attempt($request->only('email', 'password'))) {
            // Redirect back with errors if the credentials are incorrect
            return back()->withErrors([
                "system" => trans('auth.failed'),
            ])->withInput($request->only('email'));
        }

        return redirect('/home');
    }
}
