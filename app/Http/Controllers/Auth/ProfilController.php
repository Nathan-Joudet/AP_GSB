<?php

namespace App\Http\Controllers;


class ProfilController extends Controller
{
   
    public function voir()
    {
        $Nom = request('VIS_NOM');

        return $Nom;
    }


}
