<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Logement extends Controller
{
    public function Creation(Request $request) {

        switch ($request->page) {
            case 0:
                return View("logement/creer_logement");
                break;
            case 1:
                return View("logement/creer_logement-p1");
                break;
            case 2:
                return View("logement/creer_logement-p2");
                break;
            case 3:
                return View("logement/creer_logement-p3");
                break;
            case 4:
                return View("logement/creer_logement-p4");
                break;
            case 5:
                return View("logement/creer_logement-p5");
                break;
            case 6:
                return View("logement/creer_logement-p6");
                break;
            case 7:
                return View("logement/creer_logement-p7");
                break;
        }
    }

    public function ajouterLogementDB() {

        $tab = [
            "Villa stylée",
            "Voici une villa stylée",
            "Ma villa cool à louer",
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
    }

    public function getInfoLogement(Request $request) {
        $id_proprio = DB::select('select id_proprio_logement from logement where id_logement = ?', [intval($request->id)]);
        return View("logement/details_logement" , ['logement' => DB::select('select * from logement where id_logement = ?', [intval($request->id)]) [0],  
        'chambre' => DB::select('select * from chambre where id_logement = ?', [intval($request->id)]), 
        'nom_proprio' => DB::select('select nom_pers from personnes where id = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'paypal' => DB::select('select paypal_proprio from proprietaire where id_proprio = ?', [intval($id_proprio[0]->id_proprio_logement)])]);
    } 
}
