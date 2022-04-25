<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Medicament;

class MedicamentController extends Controller
{
   
    public function searchM()
    {
        $m = request()->input('m');
        // dd($q);

        $searchMedicament = Medicament::where('MED_NOMCOMMERCIAL', 'like', "$m%")
        ->get();

        return view('medicament')->with('medicaments', $searchMedicament);
    }
}
