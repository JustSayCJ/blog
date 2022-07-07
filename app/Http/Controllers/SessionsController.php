<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt($attributes)) {
            return redirect('/');
        }
        throw ValidationException::withMessages(['email' => 'Je e-mailadres klopt niet', 'password' => 'Je wachtwoord klopt niet']);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
