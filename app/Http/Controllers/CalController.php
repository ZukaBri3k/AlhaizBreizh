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

    public function createIcal(Request $request)
    {
        $id_pers = Auth::user()->id;
        dd(DB::select("select * from reservation natural join devis where id_client_devis = ? and confirm_reserv = true", [$id_pers]));

        $events = DB::table('calendrier')->get();
        $ical = "BEGIN:VCALENDAR\n";
        $ical .= "VERSION:2.0\n";
        $ical .= "PRODID:-//hacksw/handcal//NONSGML v1.0//EN\n";
        $ical .= "CALSCALE:GREGORIAN\n";
        $ical .= "METHOD:PUBLISH\n";
        $ical .= "X-WR-CALNAME:Calendrier\n";
        $ical .= "X-WR-TIMEZONE:Europe/Paris\n";
        $ical .= "X-WR-CALDESC:Calendrier\n";
        foreach ($events as $event) {
            $ical .= "BEGIN:VEVENT\n";
            $ical .= "DTSTART:" . Carbon::parse($event->jour)->format('Ymd\THis\Z') . "\n";
            $ical .= "DTEND:" . Carbon::parse($event->jour)->addHours(1)->format('Ymd\THis\Z') . "\n";
            $ical .= "SUMMARY:Réservation\n";
            $ical .= "END:VEVENT\n";
        }
        $ical .= "END:VCALENDAR";

        dd();
        //return response($ical)->header('Content-Type', 'text/calendar');
    }
}
       
    


