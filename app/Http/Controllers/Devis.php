<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Devis extends Controller
{
    public function devisProprietaire() {
        return View("devis/devis-proprio");
    }

    public function devisProprietaire2 () {
        return View('devis/devis-proprio2');
    }

    public function devisClient () {
        return View('devis/devis-client');
    }

    public function creationDevis () {
        return View('devis/index');
    }

    //---------------------

    public function creerDevisDB (Request $request) {
        $tab = [
            $request->nb_pers,
            $request->date_deb,
            $request->date_fin,
            $request->date_em,
            $request->date_val,
            false,
            $request->charges_HT,
            $request->sous_tot_HT,
            $request->sous_tot_TTC,
            $request->frais_serv_HT,
            $request->frais_serv_TTC,
            $request->taxe_de_sejour,
            $request->prix_tot,
            3,
            false,
            $request->heure_arriv,
            $request->heure_depart
        ];

        DB::insert('insert into devis (
            nb_pers,
            date_deb,
            date_fin,
            date_em,
            date_val,
            annul,
            charges_ht,
            sous_tot_ht,
            sous_tot_ttc,
            frais_serv_ht,
            frais_serv_ttc,
            taxe_de_sejour,
            prix_tot,
            delai,
            etat_devis,
            heure_arriv,
            heure_depart,
            id_client_devis
            ) values (
            ?, ?, ?, ?, ?, ?, ?, ?, ?,
            ?, ?, ?, ?, ?, ?, ?, ?
            )', $tab);
    }
}
