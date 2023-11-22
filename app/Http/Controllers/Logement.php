<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Logement extends Controller
{
    public function Creation() {
        return View("logement/creer_logement");
    }

    public function ajouterLogementDB() {

        $tab = [
            serial,
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
            [23],
            ["eau"],
            "photo.jpeg",
            "photo_sup.png",
            5,
            5000,
            true,
            1
        ];

        DB::insert('insert into logement (
        id_logement,
        libelle_logement,
        accroche_logement,
        descriptif_logement,
        nb_personnes_max,
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
        ?, ?, ?, ?, ?, ?, ?, ?)', $tab);
    }
}
