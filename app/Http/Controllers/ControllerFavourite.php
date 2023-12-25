<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Vrchol;
use Illuminate\Support\Facades\Auth;

class ControllerFavourite extends Controller
{
    public function pridanieOdobranieFavourite(Vrchol $vrchol)
    {
        $favourite = Favourite::where('user_id', Auth::id())
            ->where('vrchol_id', $vrchol->id)
            ->first();

        if ($favourite) {

            $favourite->delete();
        } else {

            $favourite = new Favourite;
            $favourite->user_id = Auth::id();
            $favourite->vrchol_id = $vrchol->id;
            $favourite->save();
        }

        return back();
    }
}
