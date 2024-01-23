<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\calendrier; // Assurez-vous de remplacer 'VotreModel' par le modèle que vous utilisez pour les événements

class CalController extends Controller
{
    public function mettreAJourDisponibilite()
    {
        // Initialisez le tableau de disponibilité par jour avec tous les jours à true
        $disponibiliteParJour = [
            'Lundi' => true,
            'Mardi' => true,
            'Mercredi' => true,
            'Jeudi' => true,
            'Vendredi' => true,
            'Samedi' => true,
            'Dimanche' => true,
        ];

        // Récupérez tous les événements de votre base de données (remplacez 'VotreModel' par le modèle approprié)
        $evenements = Calcontroller::all();

        // Parcourez tous les événements et mettez à jour la disponibilité par jour
        foreach ($evenements as $evenement) {
            $startDayOfWeek = Carbon::parse($evenement->start_date)->dayOfWeek;
            $endDayOfWeek = $evenement->end_date ? Carbon::parse($evenement->end_date)->dayOfWeek : $startDayOfWeek;

            // Mettez à jour la disponibilité pour les jours couverts par l'événement
            for ($i = $startDayOfWeek; $i <= $endDayOfWeek; $i++) {
                $dayName = Carbon::now()->startOfWeek()->addDays($i)->format('l');
                $disponibiliteParJour[$dayName] = false;
            }
        }

        // Mettez à jour la base de données avec la nouvelle disponibilité
        // (remplacez cette partie par votre logique spécifique pour mettre à jour la base de données)
        // Exemple hypothétique :
        // VotreModel::where('date', $date)->update(['disponibilite' => $nouvelleDisponibilite]);

        // Retournez une réponse
        return response()->json(['message' => 'Disponibilité mise à jour avec succès.']);
    }
}
