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
        $formattedDate = Carbon::parse($date)->format('Y-m-d');
        dd($formattedDate);  
        DB::table('calendrier')->insert([
            'statut_propriete' =>true,
            'jour' => $formattedDate,
            'disponibilite' => true,

            // ... autres colonnes ...
        ]);
        return response()->json(['message' => 'Événement ajouté avec succès à la base de données.']);
    }
        public function enregistrerEvenement(Request $request)
        {
            $date = $request->input('date');
            
            // Traitement de la date si nécessaire
            $formattedDate = Carbon::parse($date)->format('Y-m-d H:i:s');
            
            // Log pour vérification
            Log::info('Date reçue côté serveur : ' . $formattedDate);
    
            // Autres opérations avec la date...
    
            return response()->json(['message' => 'Événement enregistré avec succès.']);
        }
    }
       
    


