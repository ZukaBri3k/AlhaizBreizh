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
        
        $date = $request->input('events'); 
        $formattedDate = Carbon::parse($date)->format('Y-m-d');
        dd($formattedDate);
        DB::table('calendrier')->insert([
            'statut_propriete' =>true,
            'jour' => $date,
            'disponibilite' => true,

            // ... autres colonnes ...
        ]);
        return response()->json(['message' => 'Événement ajouté avec succès à la base de données.']);

    }
       
        
       
       
    }


