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
        $date = $request->input('date');
        $formattedDate = Carbon::parse($date)->format('Y-m-d');
        dd($request->all());
        dd($formattedDate);
        // Ajoutez votre logique pour insérer ces dates dans la base de données.
        // Notez que vous devez adapter cette logique à votre modèle de base de données.
        // Exemple hypothétique d'insertion dans la base de données :
        DB::table('calendrier')->insert([
            'statut_propriete' =>true,
            'jour' => $date,
            'disponibilite' => true,

            // ... autres colonnes ...
        ]);

        return response()->json(['message' => 'Événement ajouté avec succès à la base de données.']);
    }
}