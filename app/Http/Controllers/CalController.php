<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\calendrier; 
use Illuminate\Support\Facades\DB;

class CalController extends Controller
{
    public function ajouterEvenementDB(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        // Ajoutez votre logique pour insérer ces dates dans la base de données.
        // Notez que vous devez adapter cette logique à votre modèle de base de données.

        // Exemple hypothétique d'insertion dans la base de données :
        DB::table('votre_table')->insert([
            'start_date' => $start_date,
            'end_date' => $end_date,
            // ... autres colonnes ...
        ]);

        return response()->json(['message' => 'Événement ajouté avec succès à la base de données.']);
    }
}