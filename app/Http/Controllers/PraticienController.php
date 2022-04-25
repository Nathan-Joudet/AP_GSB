<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Praticien;

// Controller Praticien
class PraticienController extends Controller
{
    // Fonction permettant de rechercher un Praticien à partir de son TYP_CODE
    public function searchP()
    {
        $q = request()->input('q');

        $searchPraticien = Praticien::where('TYP_CODE', 'like', "$q%")
        ->get();

        return view('praticien')->with('praticiens', $searchPraticien);
    }
}


