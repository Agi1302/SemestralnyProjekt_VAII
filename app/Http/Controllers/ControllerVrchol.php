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
            'vystup_z' => 'required|max:200',
            'typ_tury' => 'required|in:horska,oddychova',
            'narocnost' => 'required|in:lahka,stredna,tazka',
            'dostupne_v_zime' => 'required|in:ano, nie',
            'dlzka_trasy' => 'required|in:1-5,5-10,10+',
            'dostupnost' => 'required|in:bez_vodcu,s_vodcom'
        ]);


        $vrchol = new Vrchol;

        $vrchol->nazov_vrcholu = $request->input('nazov_vrcholu');
        $vrchol->stat = $request->input('stat');
        $vrchol->okres = $request->input('okres');
        $vrchol->nadmorska_vyska = $request->input('nadmorska_vyska');
        $vrchol->pohorie = $request->input('pohorie');
        $vrchol->najlahsi_vystup_z = $request->input('vystup_z');
        $vrchol->typ_tury = $request->input('typ_tury');
        $vrchol->narocnost = $request->input('narocnost');
        $vrchol->dostupne_v_zime = $request->input('dostupne_v_zime');
        $vrchol->dlzka_trasy = $request->input('dlzka_trasy');
        $vrchol->dostupnost = $request->input('dostupnost');


        $vrchol->save();


        $vrchol->save();

        return redirect('/pridajPrispevok');
    }
    public function create()
    {
        return view('viewUpravenieDatabazy');
    }


}

//
//namespace App\Http\Controllers;
//
//use App\Models\Vrchol;
//use Illuminate\Http\Request;
//
//class ControllerVrchol extends Controller
//{
//    public function index()
//    {
//        $vrcholy = Vrchol::all();
//
//        return view('viewHlavnaStranka', ['vrcholy' => $vrcholy]);
//    }
//
//    public function store(Request $request)
//    {
//        $validatedData = $request->validate([
//            'nazov_vrcholu' => 'required|max:200',
//            'stat' => 'required|max:200',
//            'okres' => 'required|max:200',
//            'nadmorska_vyska_vrcholu' => 'required|integer',
//            'pohorie' => 'required|max:200',
//            'vystup_z' => 'required|max:200',
//            'typ_tury' => 'required|in:horska,oddychova',
//            'narocnost' => 'required|in:lahka,stredna,tazka',
//            'dostupne_v_zime' => 'required|in:ano, nie',
//            'dlzka_trasy' => 'required|in:1-5,5-10,10+',
//            'dostupnost' => 'required|in:bez_vodcu,s_vodcom'
//        ]);
//
//        $vrchol = new Vrchol;
//
//        $vrchol->nazov_vrcholu = $request->input('nazov_vrcholu');
//        $vrchol->stat = $request->input('stat');
//        $vrchol->okres = $request->input('okres');
//        $vrchol->nadmorska_vyska_vrcholu = $request->input('nadmorska_vyska_vrcholu');
//        $vrchol->pohorie = $request->input('pohorie');
//        $vrchol->najlahsi_vystup_z = $request->input('vystup_z');
//        $vrchol->typ_tury = $request->input('typ_tury');
//        $vrchol->narocnost = $request->input('narocnost');
//        $vrchol->dostupne_v_zime = $request->input('dostupne_v_zime');
//        $vrchol->dlzka_trasy = $request->input('dlzka_trasy');
//        $vrchol->dostupnost = $request->input('dostupnost');
//
//        $vrchol->save();
//
//        return redirect('/pridajPrispevok');
//    }
//    public function create()
//    {
//        return view('viewUpravenieDatabazy');
//    }
//
//
//}
