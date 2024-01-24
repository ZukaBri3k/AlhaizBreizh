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
        $statut = $request->input('statut'); 

        // Exemple hypothétique d'insertion dans la table "votre_table" :
        DB::table('calendrier')->insert([
            'date' => $date,
            'statut' => $statut,
            // ... autres colonnes ...
        ]);

        // Mettez à jour la table "calendrier" pour marquer les jours comme non disponibles.
        $joursIndisponibles = $this->JoursIndisponibles($date);

        // Assurez-vous que votre logique de mise à jour de la disponibilité est correcte
        // Notez que vous devez adapter cette logique à votre modèle de base de données.
        if ($statut === 'indisponible') {
            DB::table('calendrier')->whereIn('jour', $joursIndisponibles)->update(['disponibilite' => false]);
        } elseif ($statut === 'reserve') {
            // Si c'est réservé, mettez également à jour la disponibilité à false
            DB::table('calendrier')->whereIn('jour', $joursIndisponibles)->update(['disponibilite' => false]);
        }

        return response()->json(['message' => 'Événement ajouté avec succès à la base de données.']);
    }
}