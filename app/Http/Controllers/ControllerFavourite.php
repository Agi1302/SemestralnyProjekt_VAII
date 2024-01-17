<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Vrchol;
use Illuminate\Support\Facades\Auth;

class ControllerFavourite extends Controller
{
    public function pridanieOdobranieFavourite( $vrchol_id)
    {


        $favourite = Favourite::where('user_id', Auth::id())
            ->where('vrchol_id', $vrchol_id)
            ->first();

        if ($favourite) {

            $favourite->delete();
        } else {

            $favourite = new Favourite;
            $favourite->user_id = Auth::id();
            $favourite->vrchol_id = $vrchol_id;
            $favourite->save();
        }

        return back();
    }


    public function showFavorites()
    {
        $user = Auth::user();
        $favourites = $user->favourites;

        if($favourites == null) {
            $favourites = [];
        }

        return view('hlavne.uzivatel.viewOblubene', compact('favourites'));
    }







}
