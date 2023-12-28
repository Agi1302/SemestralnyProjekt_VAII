<?php

namespace App\Http\Controllers;

use App\Models\Chata;
use App\Models\Vrchol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerChaty extends Controller
{
    public function index()
    {
        $chaty = Vrchol::all();

        return view('viewChaty', ['chaty' => $chaty]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nazov' => 'required|max:200',
            'text' => 'required|max:1000',
            'obrazok' => 'required|max:200',
        ],
            [
                'nazov.max' => 'Obrazok môže mať maximálne 200 znakov',
                'text.max' => 'Položka text vrcholu je povinná, maximalny pocet prekroceny',
                'obrazok.max' => 'Obrazok môže mať maximálne 200 znakov',
            ]);

        $chata = new Chata;

        $chata->nazov = $validatedData['nazov'];

        $chata->text = $validatedData['text'];
        $chata->obrazok = $validatedData['obrazok'];
        try {
            $chata->save();
            session()->flash('status', 'Príspevok bol pridaný');

        } catch (\Exception $e) {
            session()->flash('status', 'Nebolo možné príspevok pridať');

        }

        return redirect("/chaty");
    }

    public function create()
    {
        return view('viewChaty');
    }



    public function ziskanieChat() {
        $chaty = Vrchol::all();
        return view('viewChaty', compact('chaty'));
    }


    public function destroy($id)
    {
        $chata = Vrchol::find($id);

        if ($chata) {
            $chata->delete();

            session()->flash('uspesneZmazaniePrispevku', 'Príspevok bol úspešne odstránený');
            return redirect("/");
        } else {

            session()->flash('neUspesneZmazaniePrispevku', 'Príspevok sa nepodarilo odstrániť');
            return redirect("/");
        }
    }

    public function editacia($id)
    {
        $chata = Vrchol::find($id);
        return view('viewChaty', compact('chata'));
    }

    public function ulozEditaciu(Request $request)
    {

        $validatedData = $request->validate([
            'nazov' => 'required|max:200',
            'text' => 'required|max:1000',
            'obrazok' => 'required|max:200',
        ],
            [
                'nazov.max' => 'Obrazok môže mať maximálne 200 znakov',
                'text.max' => 'Položka text vrcholu je povinná, maximalny pocet prekroceny',
                'obrazok.max' => 'Obrazok môže mať maximálne 200 znakov',
            ]);


        $chata = Vrchol::find($request->id);

        if($chata) {
            $chata->nazov = $validatedData['nazov'];
            $chata->text = $validatedData['text'];
            $chata->obrazok = $validatedData['obrazok'];
            try {
                $chata->save();
                session()->flash('status', 'Príspevok bol editovaný');

            } catch (\Exception $e) {
                session()->flash('status', 'Nebolo možné upraviť príspevok');

            }
        }
        return redirect("/");}

}
