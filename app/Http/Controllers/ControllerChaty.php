<?php

namespace App\Http\Controllers;

use App\Models\Chata;
use Illuminate\Http\Request;

class ControllerChaty extends Controller
{
    public function index()
    {
        $chaty = Chata::all();


        return view('hlavne.viewChaty', compact('chaty'));
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nazov' => 'required|max:200',
            'text' => 'required|max:1000',
            'obrazok' => 'required|max:200',
            'url' => 'required|max:5000',
        ],
            [
                'nazov.max' => 'Obrazok môže mať maximálne 200 znakov',
                'text.max' => 'Položka text vrcholu je povinná, maximalny pocet prekroceny',
                'obrazok.max' => 'Obrazok môže mať maximálne 200 znakov',
                'url.max' => 'URL môže mať maximálne 5000 znakov',
            ]);

        $chata = new Chata;

        $chata->nazov = $validatedData['nazov'];

        $chata->text = $validatedData['text'];
        $chata->obrazok = $validatedData['obrazok'];
        $chata->url = $validatedData['url'];
        try {
            $chata->save();
            session()->flash('status', 'Príspevok bol pridaný');

        } catch (\Exception $e) {
            session()->flash('status', 'Nebolo možné príspevok pridať');

        }

        return redirect("/upravenieDatabazy");
    }

    public function create()
    {
        $chaty = Chata::all();
        return view('hlavne.viewChaty', ['chaty' => $chaty]);
    }




    public function ziskanieChat() {
        $chaty = Chata::all();
        return view('hlavne.viewChaty', compact('chaty'));
    }


    public function destroy($id)
    {
        $chata = Chata::find($id);

        if ($chata) {
            $chata->delete();

            session()->flash('uspesneZmazaniePrispevku', 'Príspevok bol úspešne odstránený');
            return redirect("/viewChaty");
        } else {

            session()->flash('neUspesneZmazaniePrispevku', 'Príspevok sa nepodarilo odstrániť');
            return redirect("/viewChaty");
        }
    }

    public function editacia($id)
    {
        $chata = Chata::find($id);
        $chaty = Chata::all();
        return view('hlavne.viewChaty', compact('chata', 'chaty'));
    }

    public function ulozEditaciu(Request $request)
    {

        $validatedData = $request->validate([
            'nazov' => 'required|max:200',
            'text' => 'required|max:1000',
            'obrazok' => 'required|max:200',
            'url' => 'required|max:5000',
        ],
            [
                'nazov.max' => 'Obrazok môže mať maximálne 200 znakov',
                'text.max' => 'Položka text vrcholu je povinná, maximalny pocet prekroceny',
                'obrazok.max' => 'Obrazok môže mať maximálne 200 znakov',
                'url.max' => 'URL môže mať maximálne 5000 znakov',
            ]);


        $chata = Chata::find($request->id);

        if($chata) {
            $chata->nazov = $validatedData['nazov'];
            $chata->text = $validatedData['text'];
            $chata->obrazok = $validatedData['obrazok'];
            $chata->url = $validatedData['url'];
            try {
                $chata->save();
                session()->flash('status', 'Príspevok bol editovaný');

            } catch (\Exception $e) {
                session()->flash('status', 'Nebolo možné upraviť príspevok');

            }
        }
        return redirect("/");}

}
