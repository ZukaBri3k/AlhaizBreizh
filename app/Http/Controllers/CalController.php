<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\calendrier; 
use Illuminate\Support\Facades\DB;

class CalController extends Controller
{
    private function getJoursIndisponibles($start_date, $end_date)
    {
        $joursIndisponibles = [];

        // Convertissez les dates en objets Carbon pour faciliter la manipulation des dates
        $startDate = Carbon::parse($start_date);
        $endDate = Carbon::parse($end_date);

        // Bouclez sur chaque jour entre la date de début et la date de fin
        while ($startDate->lte($endDate)) {
            // Ajoutez le jour à la liste
            $joursIndisponibles[] = $startDate->toDateString();

            // Passez au jour suivant
            $startDate->addDay();
        }

        return $joursIndisponibles;
    }
    public function ajouterEvenementDB(Request $request)
    {
        $date = $request->input('date');
        $statut = $request->input('statut'); 

        // Mettez à jour la table "calendrier" pour marquer les jours comme non disponibles.
        $joursIndisponibles = $this->getJoursIndisponibles($date);

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