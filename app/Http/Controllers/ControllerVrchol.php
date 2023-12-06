<?php

namespace App\Http\Controllers;

use App\Models\Vrchol;
use Illuminate\Http\Request;

class ControllerVrchol extends Controller
{
    public function index()
    {
        $vrcholy = Vrchol::all();

        return view('viewHlavnaStranka', ['vrcholy' => $vrcholy]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nazov_vrcholu' => 'required|max:200',
            'stat' => 'required|max:200',
            'okres' => 'required|max:200',
            'nadmorska_vyska' => 'required|integer',
            'pohorie' => 'required|max:200',
            'typ_tury' => 'required|in:horska,oddychova',
            'narocnost' => 'required|in:lahka,stredna,tazka',
            'dostupne_v_zime' => 'required|in:ano, nie',
            'dlzka_trasy' => 'required|in:1-5,5-10,10+',
            'dostupnost' => 'required|in:bez_vodcu,s_vodcom'
        ],
            [
                'nazov_vrcholu.required' => 'Položka názov vrcholu je povinná',
                'nazov_vrcholu.max' => 'Názov vrcholu môže mať maximálne 200 znakov',
                'stat.required' => 'Položka Štát je povinná',
                'stat.max' => 'Štát môže mať maximálne 200 znakov',
                'okres.required' => 'Položka Okres je povinná',
                'okres.max' => 'Okres môže mať maximálne 200 znakov',
                'nadmorska_vyska.required' => 'Položka Nadmorská výška je povinná',
                'nadmorska_vyska.integer' => 'Nadmorská výška musí byť celé číslo',
                'pohorie.required' => 'Položka Pohorie je povinná',
                'pohorie.max' => 'Pohorie môže mať maximálne 200 znakov',
            ]);

        $vrchol = new Vrchol;

        $vrchol->nazov_vrcholu = $validatedData['nazov_vrcholu'];
        $vrchol->stat = $validatedData['stat'];
        $vrchol->okres = $validatedData['okres'];
        $vrchol->nadmorska_vyska = $validatedData['nadmorska_vyska'];
        $vrchol->pohorie = $validatedData['pohorie'];
        $vrchol->typ_tury = $validatedData['typ_tury'];
        $vrchol->narocnost = $validatedData['narocnost'];
        $vrchol->dostupne_v_zime = $validatedData['dostupne_v_zime'];
        $vrchol->dlzka_trasy = $validatedData['dlzka_trasy'];
        $vrchol->dostupnost = $validatedData['dostupnost'];

        try {
            $vrchol->save();
            session()->flash('status', 'Príspevok bol pridaný');

        } catch (\Exception $e) {
            session()->flash('status', 'Nebolo možné príspevok pridať');

        }

        return redirect("/upravenieDatabazy");
    }

    public function create()
    {
        return view('viewUpravenieDatabazy');
    }

//    public function destroy($nazov)
//    {
//        $vrchol = Vrchol::where('nazov_vrcholu', $nazov)->first();
//
//        if ($vrchol) {
//            $vrchol->delete();
//            return redirect()->route('vrcholy.index')->with('success', 'Príspevok bol úspešne vymazaný');
//        } else {
//            return redirect()->route('vrcholy.index')->with('error', 'Príspevok s daným názvom sa nenašiel');
//        }
//    }

}
