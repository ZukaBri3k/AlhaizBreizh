<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\calendrier; 
use Illuminate\Support\Facades\DB;

class CalController extends Controller
{
    public function ajouterEvenementDB(Request $request)
{
        
        $date = $request->input('events'); 
        dd ($date);
        $formattedDate = Carbon::parse($date)->format('Y-m-d'); 

        
        DB::table('calendrier')->insert([
            'statut_propriete' =>false,
            'jour' => $formattedDate,
            'disponibilite' => false,

            // ... autres colonnes ...
        ]);
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
    }
       
    


