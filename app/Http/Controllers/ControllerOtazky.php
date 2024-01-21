<?php

namespace App\Http\Controllers;

use App\Models\Otazka;
use Illuminate\Http\Request;

class ControllerOtazky extends Controller
{
    public function index()
    {
        $otazky = Otazka::all();

        return view('hlavne.vseobecne.viewQ&A', compact('otazky'));
    }

    public function store(Request $request)
    {
        if (!\Auth::check()) {
            return redirect('/')->with('status', "Musíš byť prihlásený!");
        }

        $validatedData = $request->validate([
            'idPouzivatela' => 'required|max:200',
            'textOtazky' => 'required|max:5000',
            'textOdpovede' => 'max:5000',
        ],
            [
                'idPouzivatela.max' => 'idPouzivatela môže mať maximálne 200 znakov',
                'textOtazky.max' => 'Položka textOtazky je povinná, maximalny pocet prekroceny',

            ]);

        $otazka = new Otazka;

        $otazka->idPouzivatela = $validatedData['idPouzivatela'] ?? null;
        $otazka->textOtazky = $validatedData['textOtazky'] ?? null;
        $otazka->textOdpovede = $validatedData['textOdpovede'] ?? null;

        try {
            $otazka->save();
            $otazky = Otazka::all();
            session()->flash('status', 'Príspevok bol pridaný');
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            session()->flash('status', 'Nebolo možné príspevok pridať');
        }

        return redirect("/Q&A");
    }

    public function create()
    {
        $otazky = Otazka::all();
        return view('hlavne.vseobecne.viewQ&A', ['otazky' => $otazky]);
    }

    public function pridajOdpoved(Request $request)
    {
        if (!\Auth::check() || !\Auth::user()->is_admin()) {
            return redirect('/')->with('status', "Musíš byť prihlásený!");
        }

        $validatedData = $request->validate([
            'textOdpovede' => 'required|max:5000',
            'id' => 'required|exists:table_otazky,id',
        ],
            [
                'textOdpovede.max' => 'Položka textOpovede je povinná, maximalny pocet prekroceny',
            ]);

        $otazka = Otazka::findOrFail($validatedData['id']);
        $otazka->textOdpovede = $validatedData['textOdpovede'];
        $otazka->save();
        return redirect("/Q&A");
    }



    public function ziskanieOtazok()
    {
        $otazky = Otazka::all();
        return view('hlavne.vseobecne.viewQ&A', compact('otazky'));
    }
}
