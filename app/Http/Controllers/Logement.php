<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Personne;
use Illuminate\Support\Facades\Storage;

class Logement extends Controller
{
    public function ajouterLogementDB(Request $request) {

        dd($_FILES);
        //Storage::disk('logement')->put();

        $tab = [
            $request->libelle_logement,
            $request->accroche_logement,
            $request->descriptif_logement,
            $request->nb_personne_max,
            NULL,
            NULL,
            $request->adresse_logement,
            $request->code_postal_logement,
            $request->ville_logement,
            $request->nature_logement,
            $request->type_logement,
            $request->surface_habitable_logement,
            $request->nb_chambre_logement, 
            $request->nb_lit_total,
            $request->nb_salle_de_bain_logement,
            $request->amenagement_propose_logement,
            $request->installation_offerte_logement,
            $request->equipement_propose_logement,
            $request->service_complementaire_logement,
            "couverture.jpg",
            $request->photo_complementaire_logement,
            3.5,
            $request->prix_logement,
            true,
            auth()->user()->id,
            $request->charge_additionnel_libelle,
            $request->charge_additionnel_prix,
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
        photo_couverture_logement,
        photo_complementaire_logement,
        moyenne_avis_logement,
        prix_logement,
        en_ligne,
        id_proprio_logement,
        charge_additionnel_libelle,
        charge_additionnel_prix) values 
        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, ?, ?)', $tab);

        $id_logement = DB::select('select id_logement from logement where libelle_logement = ? AND id_proprio_logement =  ?', [$request->libelle_logement, auth()->user()->id]);
        return redirect()->route('details_previsu', ['id' => $id_logement[0]->id_logement]);
    }

    public function mise_en_ligne_logement() {
        return View("logement/mise_en_ligne_logement");
    }

    public function getInfoLogement(Request $request) {
        $id_proprio = DB::select('select id_proprio_logement from logement where id_logement = ?', [intval($request->id)]);
        return View("logement/details_logement" , ['logement' => DB::select('select * from logement where id_logement = ?', [intval($request->id)]) [0],  
        'chambre' => DB::select('select * from chambre where id_logement = ?', [intval($request->id)]), 
        'nom_proprio' => DB::select('select nom_pers from personnes where id = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'paypal' => DB::select('select paypal_proprio from proprietaire where id_proprio = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'calendrier' => DB::select('select * from calendrier where id_logement = ?', [intval($request->id)])]);
    }

    public function getInfoLogementPrevisu(Request $request) {
        $id_proprio = DB::select('select id_proprio_logement from logement where id_logement = ?', [intval($request->id)]);
        return View("logement/details_logement_previsu" , ['logement' => DB::select('select * from logement where id_logement = ?', [intval($request->id)]) [0],  
        'chambre' => DB::select('select * from chambre where id_logement = ?', [intval($request->id)]), 
        'nom_proprio' => DB::select('select nom_pers from personnes where id = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'paypal' => DB::select('select paypal_proprio from proprietaire where id_proprio = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'calendrier' => DB::select('select * from calendrier where id_logement = ?', [intval($request->id)])]);
    }

    public function getLogementsProprietaire(Request $request) {
        $id = auth()->user()->id;
        $logements = DB::select("select * from logement where id_proprio_logement = ?", [$id]);
        
        foreach ($logements as $logement) {
            $logement->lien = "/logement/" . $logement->id_logement . "/details";
            $logement->id = $logement->id_logement;
        }
        
        $tabDevis = DB::select("select * from reservation inner join devis on reservation.facture_reserv = devis.ref_devis inner join personnes on personnes.id = devis.id_client_devis inner join logement on logement.id_logement = reservation.id_logement_reserv where devis.id_proprio = ? and devis.etat_devis = false", [$id]);
        $tabReserv = DB::select("select * from reservation inner join devis on reservation.facture_reserv = devis.ref_devis inner join personnes on personnes.id = devis.id_client_devis inner join logement on logement.id_logement = reservation.id_logement_reserv where devis.id_proprio = ? and devis.etat_devis = true", [$id]);

        return View("logement/mes_logements", ['logements' => $logements, 'tabDevis' => $tabDevis, 'tabReserv' => $tabReserv]);
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
