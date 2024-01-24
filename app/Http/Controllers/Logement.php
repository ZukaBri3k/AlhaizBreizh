<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Personne;

class Logement extends Controller
{
    public function ajouterLogementDB(Request $request) {

        $tab = [
            $request->libelle_logement,
            $request->accroche_logement,
            $request->descriptif_logement,
            8,
            48.75838359918054,
            -3.4518601746445556,
            "IUT Lannion",
            22300,
            "Lannion",
            "Villa",
            "Villa",
            1300,
            1,
            1,
            0,     
            "rien",
            "rien",
            "rien",
            "aucun",
            "23",
            "eau",
            "photo.jpeg",
            "photo_sup.png",
            5,
            5000,
            true,
            2
        ];

        DB::insert('insert into logement (
        libelle_logement,
        accroche_logement,
        descriptif_logement,
        nb_personne_max,
        longitude_logement,
        latitude_logement,
        adresse_logement,
        code_postal_logement,
        ville_logement,
        nature_logement,
        type_logement,
        surface_habitable_logement,
        nb_chambre_logement,
        nb_lit_total,
        nb_salle_de_bain_logement,
        amenagement_propose_logement,
        installation_offerte_logement,
        equipement_propose_logement,
        service_complementaire_logement,
        charge_additionnel_prix,
        charge_additionnel_libelle,
        photo_couverture_logement,
        photo_complementaire_logement,
        moyenne_avis_logement,
        prix_logement,
        en_ligne,
        id_proprio_logement) values 
        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?)', $tab);

        $id_logement = DB::select('select id_logement from logement where libelle_logement = ? AND id_proprio_logement =  ?', [$request->libelle_logement], auth()->user()->id);
        return redirect()->route('getInfoLogementPrevisu', ['id' => $id_logement[0]->id_logement]);
    }

    public function getInfoLogement(Request $request) {
        $id_proprio = DB::select('select id_proprio_logement from logement where id_logement = ?', [intval($request->id)]);
        return View("logement/details_logement" , ['logement' => DB::select('select * from logement where id_logement = ?', [intval($request->id)]) [0],  
        'chambre' => DB::select('select * from chambre where id_logement = ?', [intval($request->id)]), 
        'nom_proprio' => DB::select('select nom_pers from personnes where id = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'paypal' => DB::select('select paypal_proprio from proprietaire where id_proprio = ?', [intval($id_proprio[0]->id_proprio_logement)])]);
    }

    public function getInfoLogementPrevisu(Request $request) {
        $id_proprio = DB::select('select id_proprio_logement from logement where id_logement = ?', [intval($request->id)]);
        return View("logement/details_logement_previsu" , ['logement' => DB::select('select * from logement where id_logement = ?', [intval($request->id)]) [0],  
        'chambre' => DB::select('select * from chambre where id_logement = ?', [intval($request->id)]), 
        'nom_proprio' => DB::select('select nom_pers from personnes where id = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'paypal' => DB::select('select paypal_proprio from proprietaire where id_proprio = ?', [intval($id_proprio[0]->id_proprio_logement)])]);
    }

    public function getLogementsProprietaire(Request $request) {
        $id = auth()->user()->id;
        $logements = DB::select("select * from logement where id_proprio_logement = ?", [$id]);
        
        foreach ($logements as $logement) {
            $logement->lien = "/logement/" . $logement->id_logement . "/details";
            $logement->id = $logement->id_logement;
        }
        
        $tabDevis = DB::select("select * from devis where id_proprio = ?", [$id]);

        foreach($tabDevis as $devis) {
            $devis->client = DB::select("select * from personnes where id = ?", [$devis->id])[0];
        }

        dd($tabDevis);

        return View("logement/mes_logements", ['logements' => $logements, 'devis' => $tabDevis]);
    }


    public function setLogementHorsLigne(Request $request) {
        $enLigne = DB::select('select en_ligne from logement where id_logement = ?', [intval($request->id)]);
        //dd($enLigne[0]->en_ligne);
        if($enLigne[0]->en_ligne == false) {
            DB::update('update logement set en_ligne = true where id_logement = ?', [intval($request->id)]);
        } else {
            DB::update('update logement set en_ligne = false where id_logement = ?', [intval($request->id)]);
        }

        return redirect()->back();
    }
}
