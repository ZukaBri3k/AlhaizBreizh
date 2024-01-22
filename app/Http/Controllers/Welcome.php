<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Welcome extends Controller
{
    public function affichage() {

        $logements = DB::select("SELECT * FROM logement");

        foreach ($logements as $logement) {
            $logement->lien = "site-sae-ubisoufte.bigpapoo.com/logement/" . $logement->id_logement . "/details";
        }

        return view('welcome', ['logements' => $logements]);
    }
}
