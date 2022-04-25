<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visiteur;
use App\Models\Praticien;
use App\Models\Medicament;
use App\Models\Rapport;
use Illuminate\Support\Facades\Auth;
use PDF;

// Controller Rapport
class RapportController extends Controller
{
    // Fonction 'Rapport'
    public function rapport()
    {
        $id = Auth::user()->VIS_MATRICULE;
        $rapports = Rapport::join('praticien', 'rapport_visite.PRA_NUM', '=', 'praticien.PRA_NUM')
            ->where('rapport_visite.VIS_MATRICULE', $id)
            ->get();

        return view("rapport", ["rapports" => $rapports]);
    }

    // Fonction 'rapportVisiteur'
    public function rapportVisiteur()
    {
        $praticiens = Praticien::all();

        return view("nouveauRapport", ["praticiens" => $praticiens]);
    }


    // Fonction permettant de : 
    // - Créer un nouveau rapport
    // - Stocker les informations du nouveau rapport
    // - Sauvegarder les nouvelles données du rapport
    // - Redirection vers la vue 'rapport'
    public function store(Request $request) 
    {
        $lastrapport= Rapport::orderByDesc('RAP_NUM')->first(); //Creer une variable car on ne peut convertir un objet en un nombre
        $rapport = new Rapport();
        $rapport->VIS_MATRICULE = auth()->user()->VIS_MATRICULE;
        $rapport->RAP_NUM =  $lastrapport->RAP_NUM +1; 
        $rapport->PRA_NUM = $request->praticien;
        $rapport->RAP_DATE= $request->date;
        $rapport->RAP_MOTIF = $request->motif;
        $rapport->RAP_BILAN = $request->bilan;
        $rapport->save();
        return redirect('/rapport');
    }

    
    // Fonction permettant de télécharger un rapport en PDF
    public function downloadPDF($id)
    {
        $rapports = Rapport::join('praticien', 'rapport_visite.PRA_NUM', '=', 'praticien.PRA_NUM') //Permet de récupérer les infos présentes dans les rapports
        ->where('rapport_visite.RAP_NUM', $id)
        ->first(); //FIRST permet de récupérer une seule valeur --- GET() permet de récupérer plusieures valeurs

        $pdf = PDF::loadView('pdf', ["rapports" => $rapports]);
        // $pdf = PDF::loadHTML('<p>FICHIER PDF</p>');
        return $pdf->download('rapport.pdf');
    }
}
