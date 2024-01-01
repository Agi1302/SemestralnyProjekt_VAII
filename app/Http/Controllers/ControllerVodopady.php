<?php

namespace App\Http\Controllers;

use App\Models\Vodopad;
use Illuminate\Http\Request;

class ControllerVodopady extends Controller
{
    public function index()
    {
        $vodopady = Vodopad::all();


        return view('hlavne.viewVodopady', compact('vodopady'));
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
                'text.max' => 'Položka text vodopadu je povinná, maximalny pocet prekroceny',
                'obrazok.max' => 'Obrazok môže mať maximálne 200 znakov',
            ]);

        $vodopad = new Vodopad;

        $vodopad->nazov = $validatedData['nazov'];

        $vodopad->text = $validatedData['text'];
        $vodopad->obrazok = $validatedData['obrazok'];
        try {
            $vodopad->save();
            session()->flash('status', 'Príspevok bol pridaný');

        } catch (\Exception $e) {
            session()->flash('status', 'Nebolo možné príspevok pridať');

        }

        return redirect("/upravenieDatabazy");
    }

    public function create()
    {
        $vodopady = Vodopad::all();
        return view('hlavne.viewVodopady', ['vodopady' => $vodopady]);
    }






    public function ziskanieVodopadov() {
        $vodopady = Vodopad::all();
        return view('hlavne.viewVodopady', compact('vodopady'));
    }


    public function destroy($id)
    {
        $vodopad = Vodopad::find($id);

        if ($vodopad) {
            $vodopad->delete();

            session()->flash('uspesneZmazaniePrispevku', 'Príspevok bol úspešne odstránený');
            return redirect("/vodopady");
        } else {

            session()->flash('neUspesneZmazaniePrispevku', 'Príspevok sa nepodarilo odstrániť');
            return redirect("/vodopady");
        }
    }

    public function editacia($id)
    {
        $vodopad = Vodopad::find($id);
        $vodopady = Vodopad::all();
        return view('hlavne.viewVodopady', compact('vodopad', 'vodopady'));
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
                'text.max' => 'Položka text vodopadu je povinná, maximalny pocet prekroceny',
                'obrazok.max' => 'Obrazok môže mať maximálne 200 znakov',
            ]);


        $vodopad = Vodopad::find($request->id);

        if($vodopad) {
            $vodopad->nazov = $validatedData['nazov'];
            $vodopad->text = $validatedData['text'];
            $vodopad->obrazok = $validatedData['obrazok'];
            try {
                $vodopad->save();
                session()->flash('status', 'Príspevok bol editovaný');

            } catch (\Exception $e) {
                session()->flash('status', 'Nebolo možné upraviť príspevok');

            }
        }
        return redirect("/");}

}
