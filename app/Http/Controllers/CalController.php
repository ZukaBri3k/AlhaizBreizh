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
        dd($start_date);
        // Exemple hypothétique d'insertion dans la base de données :
        DB::table('calendrier')->insert([
            'jour' => $start_date,
            'disponibilite' => true,
            // ... autres colonnes ...
        ]);

        return response()->json(['message' => 'Événement ajouté avec succès à la base de données.']);
    }
}