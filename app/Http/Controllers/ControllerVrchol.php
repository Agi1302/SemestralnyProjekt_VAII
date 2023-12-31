<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Vrchol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ControllerVrchol extends Controller
{
    public function index()
    {
        $vrcholy = Vrchol::all();

        return view('hlavne.viewHlavnaStranka', ['vrcholy' => $vrcholy]);
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
            'dostupne_v_zime' => 'required|in:ANO,NIE',
            'dlzka_trasy' => 'required|in:1-5,5-10,10+',
            'dostupnost' => 'required|in:bez_vodcu,s_vodcom',
            'obrazok' => 'required|max:200'
        ],
            [
                'nazov_vrcholu.required' => 'Položka názov vrcholu je povinná',
                'nazov_vrcholu.max' => 'Názov vrcholu môže mať maximálne 200 znakov',
                'stat.required' => 'Položka Štát je povinná',
                'stat.max' => 'Štát môže mať maximálne 200 znakov',
                'okres.required' => 'Položka Okres je povinná',
                'obrazok.required' => 'Položka Obrazok je povinná',
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
        $vrchol->obrazok = $validatedData['obrazok'];

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



    public function ziskanieVrcholov() {
        $vrcholy = Vrchol::all();
        return view('hlavne.viewHlavnaStranka', compact('vrcholy'));
    }


    public function ziskanieVrcholovVysokychTatier() {
        $vrcholy = Vrchol::where('pohorie', 'Vysoké Tatry')->get();
        return view('hlavne.viewHlavnaStranka', compact('vrcholy'));
    }

    public function ziskanieVrcholovNizkychTatier() {
        $vrcholy = Vrchol::where('pohorie', 'Nízke Tatry')->get();
        return view('hlavne.viewHlavnaStranka', compact('vrcholy'));
    }

    public function ziskanieVrcholovVelkejFatry() {
        $vrcholy = Vrchol::where('pohorie', 'Veľká Fatra')->get();
        return view('hlavne.viewHlavnaStranka', compact('vrcholy'));
    }

    public function ziskanieVrcholovMalejFatry() {
        $vrcholy = Vrchol::where('pohorie', 'Malá Fatra')->get();
        return view('hlavne.viewHlavnaStranka', compact('vrcholy'));
    }



    public function destroy($id)
    {
        $vrchol = Vrchol::find($id);

        if ($vrchol) {
            $vrchol->delete();

            session()->flash('uspesneZmazaniePrispevku', 'Príspevok bol úspešne odstránený');
            return redirect("/");
        } else {

            session()->flash('neUspesneZmazaniePrispevku', 'Príspevok sa nepodarilo odstrániť');
            return redirect("/");
        }
    }

    public function editacia($id)
    {
        $vrchol = Vrchol::find($id);
        return view('editovaniePrispevkov.viewEditovaniePrispevkuVrcholu', compact('vrchol'));
    }

    public function ulozEditaciu(Request $request)
    {

        $validatedData = $request->validate([
            'nazov_vrcholu' => 'required|max:200',
            'stat' => 'required|max:200',
            'okres' => 'required|max:200',
            'nadmorska_vyska' => 'required|integer',
            'pohorie' => 'required|max:200',
            'typ_tury' => 'required|in:horska,oddychova',
            'narocnost' => 'required|in:lahka,stredna,tazka',
            'dostupne_v_zime' => 'required|in:ANO,NIE',
            'dlzka_trasy' => 'required|in:1-5,5-10,10+',
            'dostupnost' => 'required|in:bez_vodcu,s_vodcom',
            'obrazok' => 'required|max:200',
            'id' => 'required|integer'
        ],
            [
                'nazov_vrcholu.required' => 'Položka názov vrcholu je povinná',
                'nazov_vrcholu.max' => 'Názov vrcholu môže mať maximálne 200 znakov',
                'stat.required' => 'Položka Štát je povinná',
                'obrazok.required' => 'Položka Obrazok je povinná',
                'stat.max' => 'Štát môže mať maximálne 200 znakov',
                'okres.required' => 'Položka Okres je povinná',
                'okres.max' => 'Okres môže mať maximálne 200 znakov',
                'nadmorska_vyska.required' => 'Položka Nadmorská výška je povinná',
                'nadmorska_vyska.integer' => 'Nadmorská výška musí byť celé číslo',
                'pohorie.required' => 'Položka Pohorie je povinná',
                'pohorie.max' => 'Pohorie môže mať maximálne 200 znakov',
            ]);


        $vrchol = Vrchol::find($request->id);

        if($vrchol) {
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
            $vrchol->obrazok = $validatedData['obrazok'];

            try {
                $vrchol->save();
                session()->flash('status', 'Príspevok bol editovaný');

            } catch (\Exception $e) {
                session()->flash('status', 'Nebolo možné upraviť príspevok');

            }
        }
        return redirect("/");
    }
    public function addFavouritePost(Request $request, Vrchol $vrchol) {
        $pouzivatel = Auth::user();
        $pouzivatel->favouritePosts()->attach($vrchol->id);

        return back();

    }
}
