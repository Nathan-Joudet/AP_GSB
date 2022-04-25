<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Visiteur;

class VisiteurController extends Controller
{
   
    public function search()
    {
        $s = request()->input('s');
        // dd($q);

        $searchVisiteur = Visiteur::where('VIS_NOM', 'like', "$s%")
        ->get();

        return view('visiteur')->with('visiteurs', $searchVisiteur);
    }
}
