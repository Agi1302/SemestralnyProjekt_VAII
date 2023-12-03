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
}
