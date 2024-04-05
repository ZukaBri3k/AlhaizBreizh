<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\calendrier; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CalController extends Controller
{
    public function ajouterEvenementDB(Request $request)
{
    $date = $request->input('data');
    dd($date);
if ($date) {
    
    $formattedDate = Carbon::parse($date)->format('Y-m-d H:i:s');
    DB::table('calendrier')->insert([
            'statut_propriete' =>false,
            'jour' => $formattedDate,
            'disponibilite' => false,

            // ... autres colonnes ...
        ]);
} else {
    dd($date);
}
        return response()->json(['message' => 'Événement ajouté avec succès à la base de données.']);
    }
    public function enregistrerEvenement(Request $request)
    {
        $date = $request->input('events');
        
        // Traitement de la date si nécessaire
        $formattedDate = Carbon::parse($date)->format('Y-m-d H:i:s');
        
        // Log pour vérification
        Log::info('Date reçue côté serveur : ' . $formattedDate);
    
        // Autres opérations avec la date...
    
        return response()->json(['message' => 'Événement enregistré avec succès.']);
    }

    public function genererToken() {
        $longueur = 40;
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Caractères possibles
        $token = '';
    
        // Générer le token
        for ($i = 0; $i < $longueur; $i++) {
            $token .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
    
        return $token;
    }

    public function createIcal(Request $request)
    {
        $id_pers = Auth::user()->id;
        $token = DB::select("select token from ical where id_personne = ? and date_deb = ? and date_fin = ? and reserv_suivi = ? and devis_suivi = ?", [$id_pers, $request->date_deb, $request->date_fin, $request->reservation == 'on', $request->demande_reservation == 'on']);

        if($token == null) {
            $token = $this->genererToken();

            DB::table('ical')->insert([
                'token' => $token,
                'date_deb' => $request->date_deb,
                'date_fin' => $request->date_fin,
                'id_personne' => $id_pers,
                'reserv_suivi' => $request->reservation == 'on',
                'devis_suivi' => $request->demande_reservation == 'on'
            ]);
        }

        return redirect()->route('myClientAccountIcal', ['id' => Auth::user()->id]);
    }

    public function getIcal(Request $request) {
        $token = $request->token;

        $res_ical = DB::select('select * from ical where token = ?', [$token]);

        if($res_ical != null) {

            $res_ical = $res_ical[0];
            $isProprietaire = DB::select('select "role" from proprietaire inner join personnes on personnes.id = proprietaire.id_proprio where id = ?', [$res_ical->id_personne]);
            $isProprietaire = $isProprietaire[0]->role == 2 ? true : false;
            
            $ical = "BEGIN:VCALENDAR\n";
            $ical .= "VERSION:2.0\n";
            $ical .= "PRODID:-//hacksw/handcal//NONSGML v1.0//EN\n";
            $ical .= "CALSCALE:GREGORIAN\n";
            $ical .= "METHOD:PUBLISH\n";
            $ical .= "X-WR-CALNAME:Calendrier\n";
            $ical .= "X-WR-TIMEZONE:Europe/Paris\n";
            $ical .= "X-WR-CALDESC:Calendrier\n";
            
            if($res_ical->reserv_suivi == true) {

                if($isProprietaire == true) {
                    $reservations = DB::select('select * from devis where id_proprio = ? and date_deb >= ? and date_fin <= ? and etat_devis = true', [$res_ical->id_personne, $res_ical->date_deb, $res_ical->date_fin]);
                } else {
                    $reservations = DB::select('select * from devis where id_client_devis = ? and date_deb >= ? and date_fin <= ? and etat_devis = true', [$res_ical->id_personne, $res_ical->date_deb, $res_ical->date_fin]);
                }
                
                foreach ($reservations as $reservation) {
                    $logement = DB::select('select libelle_logement, longitude_logement, latitude_logement from devis inner join reservation on devis.ref_devis = reservation.facture_reserv inner join logement on reservation.id_logement_reserv = logement.id_logement where ref_devis = ?', [$reservation->ref_devis]);

                    $ical .= "BEGIN:VEVENT\n";
                    $ical .= "DTSTART:" . Carbon::parse($reservation->date_deb)->format('Ymd\THis\Z') . "\n";
                    $ical .= "DTEND:" . Carbon::parse($reservation->date_fin)->format('Ymd\THis\Z') . "\n";
                    $ical .= "SUMMARY:Réservation : " . $logement[0]->libelle_logement . "\n";
                    $ical .= "LOCATION:" . $logement[0]->longitude_logement . "," . $logement[0]->latitude_logement . "\n";
                    $ical .= "END:VEVENT\n";
                }
            }

            if($res_ical->devis_suivi == true) {

                if($isProprietaire == true) {
                    $devis = DB::select('select * from devis where id_proprio = ? and date_deb >= ? and date_fin <= ? and etat_devis = false', [$res_ical->id_personne, $res_ical->date_deb, $res_ical->date_fin]);
                } else {
                    $devis = DB::select('select * from devis where id_client_devis = ? and date_deb >= ? and date_fin <= ? and etat_devis = false', [$res_ical->id_personne, $res_ical->date_deb, $res_ical->date_fin]);
                }

                foreach ($devis as $devi) {
                    $logement = DB::select('select libelle_logement, longitude_logement, latitude_logement from devis inner join reservation on devis.ref_devis = reservation.facture_reserv inner join logement on reservation.id_logement_reserv = logement.id_logement where ref_devis = ?', [$devi->ref_devis]);

                    $ical .= "BEGIN:VEVENT\n";
                    $ical .= "DTSTART:" . Carbon::parse($devi->date_deb)->format('Ymd\THis\Z') . "\n";
                    $ical .= "DTEND:" . Carbon::parse($devi->date_fin)->format('Ymd\THis\Z') . "\n";
                    $ical .= "SUMMARY:Demande de devis : " . $logement[0]->libelle_logement . "\n";
                    $ical .= "LOCATION:" . $logement[0]->longitude_logement . "," . $logement[0]->latitude_logement . "\n";
                    $ical .= "END:VEVENT\n";
                }
            }

            $ical .= "END:VCALENDAR";

            return response($ical)->header('Content-Type', 'text/calendar');
        }
    }

    public function delIcal(Request $request) {
        $token = $request->token;
        $id_personne = Auth::user()->id;

        DB::delete('delete from ical where token = ? and id_personne = ?', [$token, $id_personne]);

        return redirect()->route('myClientAccountIcal', ['id' => Auth::user()->id]);
    }
}
       
    


