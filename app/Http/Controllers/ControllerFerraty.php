<?php

namespace App\Http\Controllers;

use App\Models\Ferrata;
use Illuminate\Http\Request;

class ControllerFerraty extends Controller
{
    public function index()
    {
        $ferraty = Ferrata::all();


        return view('viewFerraty', compact('ferraty'));
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

        $ferrata = new Ferrata;

        $ferrata->nazov = $validatedData['nazov'];

        $ferrata->text = $validatedData['text'];
        $ferrata->obrazok = $validatedData['obrazok'];
        try {
            $ferrata->save();
            session()->flash('status', 'Príspevok bol pridaný');

        } catch (\Exception $e) {
            session()->flash('status', 'Nebolo možné príspevok pridať');

        }

        return redirect("/upravenieDatabazy");
    }

    public function create()
    {
        $ferraty = Ferrata::all();
        return view('viewFerraty', ['ferraty' => $ferraty]);
    }






    public function ziskanieFerrat() {
        $ferraty = Ferrata::all();
        return view('viewFerraty', compact('ferraty'));
    }


    public function destroy($id)
    {
        $ferrata = Ferrata::find($id);

        if ($ferrata) {
            $ferrata->delete();

            session()->flash('uspesneZmazaniePrispevku', 'Príspevok bol úspešne odstránený');
            return redirect("/ferraty");
        } else {

            session()->flash('neUspesneZmazaniePrispevku', 'Príspevok sa nepodarilo odstrániť');
            return redirect("/ferraty");
        }
    }

    public function editacia($id)
    {
        $ferrata = Ferrata::find($id);
        $ferraty = Ferrata::all();
        return view('viewFerraty', compact('ferrata', 'ferraty'));
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


        $ferrata = Ferrata::find($request->id);

        if($ferrata) {
            $ferrata->nazov = $validatedData['nazov'];
            $ferrata->text = $validatedData['text'];
            $ferrata->obrazok = $validatedData['obrazok'];
            try {
                $ferrata->save();
                session()->flash('status', 'Príspevok bol editovaný');

            } catch (\Exception $e) {
                session()->flash('status', 'Nebolo možné upraviť príspevok');

            }
        }
        return redirect("/");}

}
