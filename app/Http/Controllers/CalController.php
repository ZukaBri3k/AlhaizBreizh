<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\calendrier; // Assurez-vous de remplacer 'VotreModel' par le modèle que vous utilisez pour les événements

class CalController extends Controller
{
    public function ajouterEvenementDB(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $statut = $request->input('statut'); // Ajoutez une variable pour le statut de l'événement

        // Ajoutez votre logique pour insérer ces dates dans la table "votre_table".
        // Notez que vous devez adapter cette logique à votre modèle de base de données.

        // Exemple hypothétique d'insertion dans la table "votre_table" :
        DB::table('votre_table')->insert([
            'start_date' => $start_date,
            'end_date' => $end_date,
            'statut' => $statut,
            // ... autres colonnes ...
        ]);

        // Mettez à jour la table "calendrier" pour marquer les jours comme non disponibles.
        $joursIndisponibles = $this->getJoursIndisponibles($start_date, $end_date);

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