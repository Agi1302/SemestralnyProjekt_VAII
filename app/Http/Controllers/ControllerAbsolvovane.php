<?php

namespace App\Http\Controllers;
use App\Models\Absolvovane;
use App\Models\Vrchol;
use Illuminate\Support\Facades\Auth;
class ControllerAbsolvovane

{
    public function pridanieOdobranieAbsolvovane( $vrchol_id)
    {


        $absolvovane = Absolvovane::where('user_id', Auth::id())
            ->where('vrchol_id', $vrchol_id)
            ->first();

        if ($absolvovane) {

            $absolvovane->delete();
        } else {

            $absolvovane = new Absolvovane;
            $absolvovane->user_id = Auth::id();
            $absolvovane->vrchol_id = $vrchol_id;
            $absolvovane->save();
        }

        return back();
    }


    public function showAbsolvovane()
    {
        $user = Auth::user();
        $absolvovane = $user->absolvovane;

        if($absolvovane == null) {
            $absolvovane = [];
        }

        return view('hlavne.uzivatel.viewAbsolvovane', compact('absolvovane'));
    }

}
