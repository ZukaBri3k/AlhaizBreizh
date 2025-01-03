<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Personne;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;

class Logement extends Controller
{
    public function ajouterLogementDB(Request $request) {

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
            "img0.jpg",
            count($request->file()),
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

        $id_logement = DB::select('select id_logement from logement where id_proprio_logement =  ? ORDER BY id_logement DESC', [auth()->user()->id]);

        /* $chambre = 
        [
            $request->nombreLitsSimples,
            $request->nombreLitsDoubles,
            $request->detailsLits,
            $id_logement[0]->id_logement,
        ];
        dd($chambre);

        for($i = 1; $i <= $request->nombreDeChambres; $i++) {
            DB::insert('insert into chambre (nb_lit_simple, nb_lit_double, nb_salle_de_bain_chambre, details_lit, id_logement) values (?, ?, ?, ?, ?)', $chambre);
        } */

        //dd($request->file("image-upload2"));
        //Storage::disk('logements')->putFileAs("logement" . $id_logement[0]->id_logement, $request->file("couverture"), "couverture.jpg");
        
        //dd($request->file());
       $files = $request->file('photo_complementaire_logement');

if ($files) {
    foreach ($files as $index => $file) {
        Storage::disk('logements')->putFileAs("logement" . $id_logement[0]->id_logement, $file, "img" . $index . ".jpg");
    }
}


        //dd($APP_URL));

        return redirect()->route('details_previsu', ['id' => $id_logement[0]->id_logement]);
    }

    public function mise_en_ligne_logement() {
        return View("logement/mise_en_ligne_logement");
    }

    public function getInfoLogement(Request $request) {
        $bool_resa = false;
        $id_reserv = null;
        if(!auth()->check()) {
            $id_role = 0;
        } else {
            if(auth()->user()->role == 1) {
                $id_role = 1;
                $id_resa = DB::select('select id_reserv from reservation inner join devis on reservation.facture_reserv = devis.ref_devis inner join logement on reservation.id_logement_reserv = logement.id_logement where id_client_devis = ? and id_logement = ?', [auth()->user()->id, intval($request->id)]);
                if($id_resa != null){
                    foreach($id_resa as $values) {
                        $resa_id = DB::select('select id_reserv_avis from avis inner join reservation on avis.id_reserv_avis = reservation.id_reserv inner join logement on avis.id_logement_avis = logement.id_logement where id_reserv = ? and id_logement_avis = ?', [$values->id_reserv, intval($request->id)]);
                        if($resa_id == null) {
                            $bool_resa = true;
                            $id_reserv = $values->id_reserv;
                        }
                    }
                }
            } else {
                $id_role = 2;
            }
        }
        $id_proprio = DB::select('select id_proprio_logement from logement where id_logement = ?', [intval($request->id)]);
        return View("logement/details_logement" , ['logement' => DB::select('select * from logement where id_logement = ?', [intval($request->id)]) [0],  
        'chambre' => DB::select('select * from chambre where id_logement = ?', [intval($request->id)]), 
        'nom_proprio' => DB::select('select nom_pers from personnes where id = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'paypal' => DB::select('select paypal_proprio from proprietaire where id_proprio = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'calendrier' => DB::select('select * from calendrier where id_logement = ?', [intval($request->id)]),
        'nb_photo' => DB::select('select photo_complementaire_logement from logement where id_logement = ?', [intval($request->id)])[0]->photo_complementaire_logement,
        'avis' => DB::select('select pseudo_pers, ville_pers, pays_pers, photo_pers, id, com_avis, note_avis from personnes inner join avis on personnes.id = avis.id_personne_avis where id_logement_avis = ?', [intval($request->id)]),
        'role' => DB::select('select role from personnes where id = ?', [intval($id_role)]),
        'bool_resa' => $bool_resa,
        'id_reserv' => $id_reserv,
    ]);
    }

    public function getInfoLogementPrevisu(Request $request) {
        $id_proprio = DB::select('select id_proprio_logement from logement where id_logement = ?', [intval($request->id)]);
        return View("logement/details_logement_previsu" , 
        ['logement' => DB::select('select * from logement where id_logement = ?', [intval($request->id)]) [0],  
        'chambre' => DB::select('select * from chambre where id_logement = ?', [intval($request->id)]), 
        'nom_proprio' => DB::select('select nom_pers from personnes where id = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'paypal' => DB::select('select paypal_proprio from proprietaire where id_proprio = ?', [intval($id_proprio[0]->id_proprio_logement)]), 
        'calendrier' => DB::select('select * from calendrier where id_logement = ?', [intval($request->id)]),
        'nb_photo' => DB::select('select photo_complementaire_logement from logement where id_logement = ?', [intval($request->id)])[0]->photo_complementaire_logement,
    ]);
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

    public function getLogementsClient(Request $request) {
        $id = auth()->user()->id;
        $logements = DB::select("select * from logement where id_proprio_logement = ?", [$id]);        
        
        foreach ($logements as $logement) {
            $logement->lien = "/logement/" . $logement->id_logement . "/details";
            $logement->id = $logement->id_logement;
        }
        
        $tabDevis = DB::select("select * from reservation inner join devis on reservation.facture_reserv = devis.ref_devis inner join personnes on personnes.id = devis.id_client_devis inner join logement on logement.id_logement = reservation.id_logement_reserv where etat_devis = false and devis.id_client_devis = ?", [$id]);
        $tabReserv = DB::select("select * from reservation inner join devis on reservation.facture_reserv = devis.ref_devis inner join personnes on personnes.id = devis.id_client_devis inner join logement on logement.id_logement = reservation.id_logement_reserv where etat_devis = true and devis.id_client_devis = ?", [$id]);

        return View("logement/mes_logements_client", ['logements' => $logements, 'tabDevis' => $tabDevis, 'tabReserv' => $tabReserv]);
    }
  
    public function setLogementHorsLigne(Request $request) {
        $enLigne = DB::select('select en_ligne from logement where id_logement = ?', [intval($request->id)]);
        //dd($enLigne[0]->en_ligne);
        if($enLigne[0]->en_ligne == false) {
            DB::update('update logement set en_ligne = true where id_logement = ?', [intval($request->id)]);
        } else {
            DB::update('update logement set en_ligne = false where id_logement = ?', [intval($request->id)]);
        }

        return redirect()->route('mes_logementsLogement');
    }

    public function delLogement(Request $request) {
        $id = auth()->user()->id;
        $idProprietaireLogment = DB::select('select id_proprio_logement from logement where id_logement = ?', [intval($request->id)]);
        
        if($id != $idProprietaireLogment[0]->id_proprio_logement) {
            return redirect()->back();
        } else {
            DB::delete('delete from reservation where id_logement_reserv = ?', [intval($request->id)]);
            DB::delete('delete from logement where id_logement = ?', [intval($request->id)]);
        }
        
        return redirect()->route('mes_logementsLogement');
    }


    public function updateLogement(Request $req) {
        $id = auth()->user()->id;

        $logements = DB::select('select id_logement from logement where id_proprio_logement = ?', [$id]);
        $logementsID = [];

        foreach ($logements as $key => $logement) {
            $logementsID[$key] = $logement->id_logement;
        }

        if(in_array($req->id, $logementsID)) {
            return View("logement/update_logement", ['logement' => DB::select('select * from logement where id_logement = ?', [$req->id])[0]]);
        } else {
            return redirect()->back();
        }
    }


    public function updateLogementBDD(Request $req) {
        $id = auth()->user()->id;

        $logements = DB::select('select id_logement from logement where id_proprio_logement = ?', [$id]);
        $logementsID = [];

        foreach ($logements as $key => $logement) {
            $logementsID[$key] = $logement->id_logement;
        }

        if(in_array($req->id, $logementsID)) {

            $tab = [
                $req->libelle_logement,
                $req->accroche_logement,
                $req->descriptif_logement,
                $req->nb_personne_max,
                $req->adresse_logement,
                $req->code_postal_logement,
                $req->ville_logement,
                $req->nature_logement,
                $req->type_logement,
                $req->surface_habitable_logement,
                $req->nb_chambre_logement, 
                $req->nb_lit_total,
                $req->nb_salle_de_bain_logement,
                $req->amenagement_propose_logement,
                $req->installation_offerte_logement,
                $req->equipement_propose_logement,
                $req->service_complementaire_logement,
                $req->prix_logement,
                $req->charge_additionnel_libelle,
                $req->charge_additionnel_prix,
                $req->id,
            ];

            DB::update('update logement set 
            libelle_logement = ?,
            accroche_logement = ?,
            descriptif_logement = ?,
            nb_personne_max = ?,
            adresse_logement = ?,
            code_postal_logement = ?,
            ville_logement = ?,
            nature_logement = ?,
            type_logement = ?,
            surface_habitable_logement = ?,
            nb_chambre_logement = ?,
            nb_lit_total = ?,
            nb_salle_de_bain_logement = ?,
            amenagement_propose_logement = ?,
            installation_offerte_logement = ?,
            equipement_propose_logement = ?,
            service_complementaire_logement = ?,
            prix_logement = ?,
            charge_additionnel_libelle = ?,
            charge_additionnel_prix = ?
            where id_logement = ?', $tab);

            return redirect()->route('mes_logements');
        } else {
            return redirect()->back();
        }
    }

    public function creationAvis(Request $req) {
        $id = auth()->user()->id;
        $role = DB::select('select role from personnes where id = ?', [$id]);
        $idProprietaireLogment = DB::select('select id_proprio_logement from logement where id_logement = ?', [intval($req->id)]);
        
        if($id == $idProprietaireLogment[0]->id_proprio_logement || $role[0]->role != 1) {
            return redirect()->route('retourAvis', ['id' => $req->id]);
        } else {
            $tab = [
                $req->ratingValue,
                $req->com_avis,
                $req->id_reserv,
                $req->id,
                $id,
            ];

            DB::insert('insert into avis (note_avis, com_avis, id_reserv_avis, id_logement_avis, id_personne_avis) values (?, ?, ?, ?, ?)', $tab);
        }

        return redirect()->route('retourAvis', ['id' => $req->id]);
    }
}
