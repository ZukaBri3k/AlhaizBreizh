<?php

namespace App\Http\Controllers;


use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


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

    public function deleteClient() {

        $id = auth()->user()->id;
        DB::delete('delete from cle where id_personnes = ?', [$id]);
        $ref_devis = DB::select('select ref_devis from devis where id_client_devis = ?', [$id]);
        foreach ($ref_devis as $ref) {
            DB::delete('delete from reservation where facture_reserv = ?', [$ref->ref_devis]);
        }
        DB::delete('delete from devis where id_client_devis = ?', [$id]);
        DB::delete('delete from client where id_client = ?', [$id]);
        DB::delete('delete from personnes where id = ?', [$id]);

        $fichier = storage_path() . '/pp' . $id . '/img1.png';
        if (Storage::exists($fichier)) {
            File::delete($fichier);
        }

        $dossier = storage_path() . '/pp' . $id;
        if (Storage::exists($dossier)) {
            File::deleteDirectory($dossier);
        }

        return redirect()->route('accueil');
    }

    public function deleteProprietaire() {

        $id = auth()->user()->id;
        DB::delete('delete from cle where id_personnes = ?', [$id]);

        $id_logement = DB::select('select id_logement from logement where id_proprio_logement = ?', [$id]);
        foreach ($id_logement as $id_) {
            $idProprietaireLogment = DB::select('select id_proprio_logement from logement where id_logement = ?', [intval($id_->id_logement)]);
            DB::delete('delete from reservation where id_logement_reserv = ?', [intval($id_->id_logement)]);
            DB::delete('delete from logement where id_logement = ?', [intval($id_->id_logement)]);
        }
        DB::delete('delete from devis where id_proprio = ?', [$id]);
        DB::delete('delete from proprietaire where id_proprio = ?', [$id]);
        DB::delete('delete from personnes where id = ?', [$id]);

        return redirect()->route('accueil');
    }

    //-----------------------------------------------------

    public function inscriptionClientPopUp() {
        return View("Compte/inscription_client_pop_up");
    }

    public function inscriptionClient() {
        return View("Compte/inscription_client");
    }

    public function compteClient(Request $request) {
        if($request->id != auth()->user()->id) {
            return redirect()->route('accueil');
        } else {
            $id_personnes = DB::select('select * from personnes where id = ?', [intval($request->id)]);
            return View("Compte/MonCompteClient" , ['personnes' => DB::select('select * from personnes where id = ?', [intval($id_personnes[0]->id)]) [0],
                'cles' => DB::select('select * from cle where id_personnes = ?', [intval($id_personnes[0]->id)])]);
        }
    }

    //--------------------------------------------------------------

    public function inscriptionProprietairePopUp() {
        return View("Compte/inscription_proprietaire_pop_up");
    }

    

    public function inscriptionProprietaire() {
        return View('Compte/inscription_proprio');
    }

    public function compteProprietaire(Request $request) {
        if($request->id != auth()->user()->id) {
            return redirect()->route('accueil');
        } else { 
            $id_personnes = DB::select('select * from personnes where id = ?', [intval($request->id)]);
            return View("Compte/MonCompteProprietaire" , ['personnes' => DB::select('select * from personnes where id = ?', [intval($id_personnes[0]->id)]) [0],
                'cles' => DB::select('select * from cle where id_personnes = ?', [intval($id_personnes[0]->id)]),
                'proprietaire' => DB::select('select * from proprietaire where id_proprio = ?', [intval($id_personnes[0]->id)]) [0]]);
        }
    }
    //--------------------------------------------------------------
    public function ajoute_personne(Request $request, $role) {

        if($request->profile_pic == null || $request->profile_pic == "") {
            $photo_pers = "pp_profile.png";
        } else {
            $photo_pers = "img1.png";
        }

        $password = Hash::make($request->password);
        $personne=[
            $request->civilite_pers,
            $request->prenom_pers,
            $request->nom_pers,
            $request->pseudo_pers,
            $request->ville_pers,
            $request->pays_pers,
            $photo_pers,
            $request->adresse_pers,
            $request->code_postal_pers,
            $request->date_de_naissance,
            $request->telephone_pers,
            $password,
            $request->iban,
            $role,
            $request->mail_pers,
            
        ];


        DB::insert('insert into personnes(
            
            civilite_pers,
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
            iban,
            role,
            mail_pers
            )values(
            ?, ?, ?, ?, ?, ?, ?, 
            ?, ?, ?, ?, ?, ?, ?, ?)',$personne);

        $id = DB::select('select id from personnes where mail_pers = ? AND password = ?',[$request->mail_pers, $password]);
        
        if($photo_pers != "pp_profile.png") {
            Storage::disk('pp')->putFileAs("pp" . $id[0]->id, $request->file("profile_pic"), "img1.png");
        }
    }

    public function proprio_register(Request $request) {
        $this->ajoute_personne($request,2);
        $id_proprio = DB::select('select id from personnes where mail_pers = ? ',[$request->mail_pers]);
        $proprietaire=[
            $id_proprio[0]->id,
            $request->piece_id_proprio_recto,
            $request->piece_id_proprio_verso,            
            "'".$request->votre_nom_proposition_devis. " " .$request->nom_logement_proposition_devis. " " . $request->nom_client_proposition_devis."'",
        ];

        DB::insert('insert into proprietaire(
            id_proprio,
            proposition_auto_devis,
            piece_id_proprio_recto,
            piece_id_proprio_verso)
            values(
                ?, ?, ?, ? )',$proprietaire);

        return redirect()->route('accueil');
    }


    public function client_register(Request $request) {
        $this->ajoute_personne($request,1);
        $id_client = DB::select('select id from personnes where mail_pers = ? ',[$request->mail_pers]);
        $client=[
            $id_client[0]->id,
            "'".$request->nom_prop_demande_devis. " " . $request->nom_logement_demande_devis . " " . $request->votre_nom_demande_devis."'",
            "'".$request->nom_prop_acceptation . " " . $request->nom_logement_acceptation . " " . $request->votre_nom_acceptation."'"  ,
            "'".$request->nom_prop_refus . " " .$request->nom_logement_refus." " . $request->votre_nom_refus."'",
        ];

        DB::insert('insert into client( 
            id_client,
            demande_devis_auto,
            msg_confirm_devis,
            msg_refus_devis
            )values(?, ?, ?, ?)
            ',$client);
        return redirect()->route('accueil');
    }


    //--------------------------------------------------------------

    public function generationCle(Request $request) {
        $id = auth()->user()->id;
        $random = random_bytes(20);
        $cle = base64_encode($random);

        $tabcle = [
            $cle,
            false,
            $id
        ];

        DB::insert('insert into cle(cle, privilege, id_personnes) values(?, ?, ? )', $tabcle);
        return redirect()->route('myClientAccountAPI', ['id' => $id]);
    }

    public function deleteCle(Request $request) {
        $id = auth()->user()->id;
        $cle = urldecode($request->query('cle'));
        $cle = str_replace(' ', '+', $cle);
        DB::delete('delete from cle where cle = ? AND id_personnes = ?', [$cle, $id]);
        return redirect()->route('myClientAccountAPI', ['id' => $id]);
    }

    public function generationClePro(Request $request) {
        $id = auth()->user()->id;
        $random = random_bytes(20);
        $cle = base64_encode($random);

        $tabcle = [
            $cle,
            false,
            $id
        ];

        DB::insert('insert into cle(cle, privilege, id_personnes) values(?, ?, ? )', $tabcle);
        return redirect()->route('myProprietaireAccountAPI', ['id' => $id]);
    }

    public function deleteClePro(Request $request) {
        $id = auth()->user()->id;
        $cle = urldecode($request->query('cle'));
        $cle = str_replace(' ', '+', $cle);
        DB::delete('delete from cle where cle = ? AND id_personnes = ?', [$cle, $id]);
        return redirect()->route('myProprietaireAccountAPI', ['id' => $id]);
    }


    //---------------------------------------------------------

    public function modifierClient() {
        $id = auth()->user()->id;
        $personne = DB::select('select * from personnes where id = ?', [$id]);
        return view('Compte/modif_client', ['personnes' => $personne[0]]);
    }

    public function modificationsClient(Request $request) {
        $id = auth()->user()->id;
        if($request->profile_pic == null || $request->profile_pic == "") {
            $photo_pers = "pp_profile.png";
        } else {
            $photo_pers = "img1.png";
        }

        $password = Hash::make($request->password);
        $data = [
            $request->civilite_pers,
            $request->prenom_pers,
            $request->nom_pers,
            $request->telephone_pers,
            $request->mail_pers,
            $request->ville_pers,
            $request->code_postal_pers,
            $request->adresse_pers,
            $request->pays_pers,
            $password,
            $request->pseudo_pers,
            $photo_pers,
            null, // age_pers
            $request->iban,
            $request->date_de_naissance,
            $id,
        ];

        DB::update('update personnes set 
        civilite_pers = ?,
        prenom_pers = ?,
        nom_pers = ?,
        telephone_pers = ?,
        mail_pers = ?,
        ville_pers = ?,
        code_postal_pers = ?,
        adresse_pers = ?,
        pays_pers = ?,
        password = ?,
        pseudo_pers = ?,
        photo_pers = ?,
        age_pers = ?,
        est_banni = false,
        iban = ?,
        role = 1,
        remember_token = null,
        date_de_naissance = ?,
        genre_pers = null
        where id = ?', $data);

        if($photo_pers != "pp_profile.png") {
            Storage::disk('pp')->putFileAs("pp" . $id, $request->file("profile_pic"), "img1.png");
        }

        return redirect()->route('myClientAccount', ['id' => $id]);
    }

    public function modifierProprietaire() {
        $id = auth()->user()->id;
        $personne = DB::select('select * from personnes where id = ?', [$id]);
        return view('Compte/modif_proprio', ['personnes' => $personne[0]]);
    }

    public function modificationsProprietaire(Request $request) {
        $id = auth()->user()->id;
        if($request->profile_pic == null || $request->profile_pic == "") {
            $photo_pers = "pp_profile.png";
        } else {
            $photo_pers = "img1.png";
        }

        $password = Hash::make($request->password);
        $data = [
            $request->civilite_pers,
            $request->prenom_pers,
            $request->nom_pers,
            $request->telephone_pers,
            $request->mail_pers,
            $request->ville_pers,
            $request->code_postal_pers,
            $request->adresse_pers,
            $request->pays_pers,
            $password,
            $request->pseudo_pers,
            $photo_pers,
            null, // age_pers
            $request->iban,
            $request->date_de_naissance,
            $id,
        ];

        $piece_id = DB::select('select piece_id_proprio from proprietaire where id_proprio = ?', [$id]);

        $proprio = [
            $piece_id[0]->piece_id_proprio,
            $request->piece_id_proprio_recto,
            $request->piece_id_proprio_verso,
            $id
        ];

        DB::update('update personnes set 
        civilite_pers = ?,
        prenom_pers = ?,
        nom_pers = ?,
        telephone_pers = ?,
        mail_pers = ?,
        ville_pers = ?,
        code_postal_pers = ?,
        adresse_pers = ?,
        pays_pers = ?,
        password = ?,
        pseudo_pers = ?,
        photo_pers = ?,
        age_pers = ?,
        est_banni = false,
        iban = ?,
        role = 2,
        remember_token = null,
        date_de_naissance = ?,
        genre_pers = null
        where id = ?', $data);

        DB::update('update proprietaire set
        ref_devis_proprio = null,
        piece_id_proprio = ?,
        langue_proprio = null,
        proposition_auto_devis = null,
        piece_id_proprio_recto = ?,
        piece_id_proprio_verso = ?,
        paypal_proprio = null
        where id_proprio = ?', $proprio);

        Storage::disk('pp')->putFileAs("pp" . $id, $request->file("profile_pic"), "img1.png");

        return redirect()->route('myProprietaireAccount', ['id' => $id]);
    }
}
