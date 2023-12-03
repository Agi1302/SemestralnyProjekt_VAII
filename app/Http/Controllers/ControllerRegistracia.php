<?php

namespace App\Http\Controllers;

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
        $user->heslo = Hash::make($validatedData['heslo']); // Hashování hesla

        //$post->description = $request->description;
        $user->save();
        return redirect('/')->with('status', 'Registrácia prebehla úspešne');
    }
}

