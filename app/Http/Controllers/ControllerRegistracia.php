<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Pouzivatel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ControllerRegistracia extends Controller
{
    public function zaregistruj(Request $request)
    {
        $validatedData = $request->validate([
            'meno' => 'required|max:200',
            'priezvisko' => 'required|max:200',
            'email' => 'required|email|unique:pouzivatelia',
            'heslo' => 'required|min:8',
        ]);

        $user = new Pouzivatel();
        $user->meno = $validatedData['meno'];
        $user->priezvisko = $validatedData['priezvisko'];
        $user->email = $validatedData['email'];
        $user->heslo = Hash::make($validatedData['heslo']);

        $user->save();
        return redirect('/')->with('status', 'Registrácia prebehla úspešne');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        if (!Hash::check($request->get('old_password'), Auth::user()->getAuthPassword())) {
            return back()->withErrors(['old_password' => 'Staré heslo je nesprávne.']);
        }

        $user = Auth::user();
        $user->heslo = Hash::make($request->get('new_password'));
        $user->save();

        return back()->with('status', 'Heslo bolo úspešne zmenené.');
    }

    public function updateUser(Request $request)
    {
        $user = Auth::user();
        $user->meno = $request->get('meno');
        $user->priezvisko = $request->get('priezvisko');
        $user->email = $request->get('email');
        $user->save();

        return back()->with('status', 'Údaje boli úspešne zmenené.');
    }
}

