<?php

namespace App\Http\Controllers;

use App\Models\Pouzivatel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerPrihlasenie extends Controller
{
    public function prihlasenie(Request $request)
    {
        $validatedData = $request->validate([

            'email' => 'required|email',
            'heslo' => 'required'
        ]);



        if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['heslo']])) {

            $request->session()->regenerate();

            return redirect()->intended('/')->with(["uspesnePrihlasenie" =>"Užívateľ úspešne prihlásený"]);
        }
        return back()->withErrors([
            'email' => 'Nesprávne zadané prihlasovacie údaje.',
        ]);
    }

    public function odhlasenie() {

        if (!\Auth::check()) {
            return redirect('/')->with('status', "Musíš byť prihlásený!");
        }

        Auth::logout();
        return redirect('/');
    }
}
