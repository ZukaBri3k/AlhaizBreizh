<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function __invoke()
    {

        if (in_array('1', explode(' ', auth()->user()->role))) {
            return view('Compte.MonCompteClient');
        } else if (auth()->user()->role == '3') {
            return view('Compte.MonCompteAdmin');
        }
    }

    public function loginProprietaire() {
        return view('Compte.MonCompteProprietaire');
    }
    public function updateAccount() {

        $data = request()->validate([
            'name' => 'required'
        ]);

        $user = auth()->user()->mail_pers;
        DB::table('personnes')->where('mail_pers', '=', $user)->update([
            "nom_pers" => $data["nom_pers"]
        ]);


        return redirect()->back();
    }

    public function deleteAccount() {

        $user = auth()->user()->getRememberToken();
        DB::table('personnes')->where('remember_token', '=', $user)->delete();


        return redirect()->route('login');
    }

    //-----------------------------------------------------

    public function inscriptionClientPopUp() {
        return View("Compte/inscription_client_pop_up");
    }

    public function inscriptionClient() {
        return View("Compte/inscription_client");
    }

    public function compteClient() {
        return View("Compte/MonCompteClient");
    }

    //--------------------------------------------------------------

    public function inscriptionProprietairePopUp() {
        return View("Compte/inscription_proprietaire_pop_up");
    }

    

    public function inscriptionProprietaire() {
        return View('Compte/inscription_proprio');
    }

    public function compteProprietaire() {
        return View("Compte/MonCompteProprietaire");
    }
      //--------------------------------------------------------------
    public function ajoute_personne(Request $request) {
        dd("TEST");
        $personne=[
            $request->civilite_pers,
            $request->prenom_pers,
            $request->nom_pers,
            $request->pseudo_pers,
            $request->ville_pers,
            $request->pays_pers,
            $request->photo_pers,
            $request->adresse_pers,
            $request->code_postal_pers,
            $request->date_de_naissance,
            $request->telephone_pers,
            $request->password,
            $request->confirmerMotDePasse,    
            $request->iban,
            $request->mail_perso,
        ];

        $proprietaire=[
            $request->nom_client_proposition_devis,
            $request->nom_logement_proposition_devis,
            $request->votre_nom_proposition_devis,
            $request->piece_id_proprio_recto,
            $request->piece_id_proprio_verso,
        ];

        $client=[
            $request->nom_prop_demande_devis,
            $request->nom_logement_demande_devis,
            $request->votre_nom_demande_devis,
            $request->nom_prop_acceptation,
            $request->nom_logement_acceptation,
            $request->votre_nom_acceptation,
            $request->nom_prop_refus,
            $request->nom_logement_refus,
            $request->votre_nom_refus,
        ];

    DB::insert('insert into personne(
        prenom_pers,
        nom_pers,
        pseudo_pers,
        ville_pers,
        pays_pers,
        photo_pers,
        adresse_pers,
        code_postal_pers,
        date_de_naissance,
        telephone_pers,
        password,
        confirmerMotDePasse,
        iban,
        mail_pers)values(
            ?, ?, ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, ?, ?, )',$personne);

    DB::insert('insert into proprietaire(
        nom_client_proposition_devis,
        nom_logement_proposition_devis,
        votre_nom_proposition_devis,
        piece_id_proprio_recto,
        piece_id_proprio_verso)values(
            ?, ?, ?, ?, ?, )',$proprietaire);

    DB::insert('insert into client(
        nom_prop_demande_devis,
        nom_logement_demande_devis,
        votre_nom_demande_devis,
        nom_prop_acceptation,
        nom_logement_acceptation,
        votre_nom_acceptation,
        nom_prop_refus,
        nom_logement_refus,
        votre_nom_refus)values(
            ?, ?, ?, ?, ?, ?, ?, ?, ?, )
        ',$client);
    }

}
