<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Welcome extends Controller
{
    public function affichage() {

        $logements = DB::select("SELECT * FROM logement where en_ligne = 'true' ORDER BY moyenne_avis_logement DESC LIMIT 4");

        foreach ($logements as $logement) {
            $logement->lien = "/logement/" . $logement->id_logement . "/details";
            $logement->id = $logement->id_logement;
        }


        $logementsRecents = DB::select("SELECT * FROM where logement en_ligne = 'true' ORDER BY id_logement DESC");

        foreach ($logementsRecents as $logement) {
            $logement->lien = "/logement/" . $logement->id_logement . "/details";
            $logement->id = $logement->id_logement;
        }

        return view('welcome', ['logements' => $logements, 'logementsRecents' => $logementsRecents]);
    }
}
