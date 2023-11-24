<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Devis extends Controller
{
    public function devisProprietaire() {
        return View("devis/devis-proprio");
    }

    public function devisProprietaire2 () {
        return View('devis/devis-proprio2');
    }

    public function devisClient () {
        return View('devis/devis-client');
    }

    public function creationDevis () {
        return View('devis/index');
    }

    public function validationDevis () {
        dd(DB::update('update users set etat_devis = true where ref_devis = ?', [intval($request->id)]));
    }

    public function refusDevis () {
        dd(DB::update('update users set etat_devis = false where ref_devis = ?', [intval($request->id)]));
    }

    //---------------------

    public function creerDevisDB (Request $request) {
        $tab = [

        ];

        DB::insert('insert into devis (
            nb_pers,
            date_deb,
            date_fin
            ) values (?, ?)', [1, 'Dayle']);
    }
}
