<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Devis extends Controller
{
    public function devisProprietaire() {
        return View("devis/devis-proprio");
    }

    public function devisProprietaire2 () {
        return View('devis/devis');
    }

    public function devisClient () {
        return View('devis/devis-client');
    }

    public function creationDevis (Request $request) {
        return View('devis/index', ['id_client' => $request->id_client]);
    }

    public function validationDevis (Request $request) {
        DB::update('update devis set etat_devis = true where ref_devis = ?', [$request->id_devis]);
        return redirect()->route('mes_logementsDevis');
    }

    public function refusDevis (Request $request) {
        DB::delete('delete from reservation where id_reserv = ?', [$request->id_reserv]);
        DB::delete('delete from devis where ref_devis = ?', [$request->id_devis]);
        return redirect()->route('mes_logementsDevis');
    }

    public function demande_devis (Request $request) {
        $client = DB::select('select * from personnes where id = ?', [Auth::user()->id]);

        if($client[0]->role == 1 && $request->dateDebut < $request->dateFin) {

            $id_logement = $request->id_logement;
    
            $dateDebut = strtotime($request->dateDebut);
            $dateFin = strtotime($request->dateFin);

            $nombreDeSecondes = $dateFin - $dateDebut;

            $nombreDeJours = $nombreDeSecondes / (60 * 60 * 24);
    
            $prixtot = $nombreDeJours * $request->prix_tot;
            //recuperation du proprietaire du logement en liant l'ID du logement à l'ID du proprietaire avec une jointure
            $proprietaire = DB::select('select * from personnes p join logements l on p.id = l.id_proprio_logement where l.id = ?', [$id_logement]);

            $tabDevis = [
                NULL,
                $request->dateDebut,
                $request->dateFin,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                NULL,
                $prixtot,
                NULL,
                false,
                NULL,
                NULL,
                auth()->user()->id,
                $id_proprio[0]->id_proprio_logement,
                $proprietaire[0]->nom_pers
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
                id_client_devis,
                id_proprio
                ) values (
                ?, ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
                )', $tabDevis);

                return View('devis/devis-proprio', ['nom_proprio' => $proprietaire[0]->nom_pers]);

                $devis = DB::select('select * from devis where id_client_devis = ? AND date_deb = ? AND date_fin = ?', [Auth::user()->id, $request->dateDebut, $request->dateFin]);

                $tabReservation = [
                    $id_logement,
                    false,
                    NULL,
                    $client[0]->mail_pers,
                    $devis[0]->ref_devis,
                    NULL,
                    NULL,
                    NULL,
                    NULL,
                    NULL,
                    NULL,
                    NULL
                ];
                DB::insert('insert into reservation (
                    id_logement_reserv,
                    confirm_reserv,
                    cgv_reserv,
                    mail_reserv,
                    facture_reserv,
                    num_carte,
                    date_carte,
                    crypt_carte,
                    annul_strict_reserv,
                    annul_flex_reserv,
                    annul_nrembours_reserv,
                    facture_davoir_reserv
                    ) values (
                    ?, ?, ?, ?, ?, ?, ?, ?, ?,
                    ?, ?, ?
                    )', $tabReservation);
        }
        return redirect()->back();
    }

    public function infosDevis(Request $request) {
        $nbPers = $request->input('nb_pers');
        $dateDeb = $request->input('date_deb');
        $dateFin = $request->input('date_fin');

        DB::insert('
            INSERT INTO devis (
            nb_pers,
            date_deb,
            date_fin,
            id_client_devis,
            id_proprio
            ) values (
            ?, ?, ?, ?, ?
            )', [$nbPers, $dateDeb, $dateFin, 1, 2]);
        
        return redirect()->route('devis-proprio');
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
            $request->heure_depart,
            $request->id_client,
            Auth::user()->id
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
            id_client_devis,
            id_proprio
            ) values (
            ?, ?, ?, ?, ?, ?, ?, ?, ?,
            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
            )', $tab);

            return redirect->route('devis-proprio');
    }
}
