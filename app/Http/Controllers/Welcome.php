<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Welcome extends Controller
{
    public function affichage() {

        $logements = DB::select("SELECT * FROM logement");
        dd($logements[0]);

        return view('welcome', ['logements' => $logement]);
    }
}
