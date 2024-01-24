<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\calendrier; // Assurez-vous de remplacer 'VotreModel' par le modèle que vous utilisez pour les événements

class CalController extends Controller
{
    public function ajouterEvenementsDB(Request $request) {
        $formattedEvents = $request->input('events');
        
        // Insérez les événements dans la base de données
        foreach ($formattedEvents as $event) {
            DB::insert('insert into evenements (start_date, end_date) values (?, ?)', [$event['start_date'], $event['end_date']]);
        }
    
        return response()->json(['message' => 'Événements ajoutés avec succès.']);
    }    
}