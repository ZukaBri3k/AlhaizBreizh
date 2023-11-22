<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
