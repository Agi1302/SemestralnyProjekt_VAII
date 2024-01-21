<?php

namespace App\Http\Controllers;

use App\Models\Absolvovane;
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
        if (!\Auth::check() || !\Auth::user()->is_admin()) {
            return redirect('/')->with('status', "Musíš byť prihlásený!");
        }

        $validatedData = $this->validujData($request);

        $vrchol = new Vrchol;

        $this->nastavAtributy($validatedData, $vrchol);

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
        $this->pridajLiked($vrcholy);
        $this->pridajDone($vrcholy);
        return view('hlavne.viewHlavnaStranka', compact('vrcholy'));
    }

    public function ziskanieVrcholovVysokychTatier() {
        $vrcholy = Vrchol::where('pohorie', 'Vysoké Tatry')->get();
        $this->pridajLiked($vrcholy);
        $this->pridajDone($vrcholy);

        return view('hlavne.viewHlavnaStranka', compact('vrcholy'));
    }

    public function ziskanieVrcholovNizkychTatier() {
        $vrcholy = Vrchol::where('pohorie', 'Nízke Tatry')->get();
        $this->pridajLiked($vrcholy);
        $this->pridajDone($vrcholy);

        return view('hlavne.viewHlavnaStranka', compact('vrcholy'));
    }

    public function ziskanieVrcholovVelkejFatry() {
        $vrcholy = Vrchol::where('pohorie', 'Veľká Fatra')->get();
        $this->pridajLiked($vrcholy);
        $this->pridajDone($vrcholy);

        return view('hlavne.viewHlavnaStranka', compact('vrcholy'));
    }

    public function ziskanieVrcholovMalejFatry() {
        $vrcholy = Vrchol::where('pohorie', 'Malá Fatra')->get();
        $this->pridajLiked($vrcholy);
        $this->pridajDone($vrcholy);

        return view('hlavne.viewHlavnaStranka', compact('vrcholy'));
    }

    public function destroy($id)
    {
        if (!\Auth::check() || !\Auth::user()->is_admin()) {
            return redirect('/')->with('status', "Musíš byť prihlásený!");
        }

        $vrchol = Vrchol::find($id);

        if ($vrchol) {

            Favourite::where('vrchol_id', $vrchol->id)->delete();
            Absolvovane::where('vrchol_id', $vrchol->id)->delete();

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
        if (!\Auth::check() || !\Auth::user()->is_admin()) {
            return redirect('/')->with('status', "Musíš byť prihlásený!");
        }
        $vrchol = Vrchol::find($id);
        return view('editovaniePrispevkov.viewEditovaniePrispevkuVrcholu', compact('vrchol'));
    }

    public function ulozEditaciu(Request $request)
    {
        if (!\Auth::check() || !\Auth::user()->is_admin()) {
            return redirect('/')->with('status', "Musíš byť prihlásený!");
        }

        $validatedData = $this->validujData($request);
        $validatedData += $request->validate([
            'id' => 'required|integer'
        ]);

        $vrchol = Vrchol::find($request->id);

        if($vrchol) {
            $this->nastavAtributy($validatedData, $vrchol);

            try {
                $vrchol->save();
                session()->flash('status', 'Príspevok bol editovaný');

            } catch (\Exception $e) {
                session()->flash('status', 'Nebolo možné upraviť príspevok');

            }
        }
        return redirect("/");
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validujData(Request $request): array
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
                'obrazok.required' => 'Položka Obrazok je povinná',
                'stat.max' => 'Štát môže mať maximálne 200 znakov',
                'okres.required' => 'Položka Okres je povinná',
                'okres.max' => 'Okres môže mať maximálne 200 znakov',
                'nadmorska_vyska.required' => 'Položka Nadmorská výška je povinná',
                'nadmorska_vyska.integer' => 'Nadmorská výška musí byť celé číslo',
                'pohorie.required' => 'Položka Pohorie je povinná',
                'pohorie.max' => 'Pohorie môže mať maximálne 200 znakov',
            ]);
        return $validatedData;
    }

    /**
     * @param array $validatedData
     * @param Vrchol $vrchol
     * @return void
     */
    public function nastavAtributy(array $validatedData, Vrchol $vrchol): void
    {
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
    }

    /**
     * @param  $vrcholy
     * @return void
     */
    public function pridajLiked($vrcholy): void
    {
        foreach ($vrcholy as $vrchol) {
            $vrchol->liked_by_user = Favourite::where('user_id', Auth::id())->where('vrchol_id', $vrchol->id)->exists();
        }
    }

    public function pridajDone($vrcholy): void
    {
        foreach ($vrcholy as $vrchol) {
            $vrchol->done_by_user = Absolvovane::where('user_id', Auth::id())->where('vrchol_id', $vrchol->id)->exists();
        }
    }
}
