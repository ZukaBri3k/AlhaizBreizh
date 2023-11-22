<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logement extends Controller
{
    public function Creation() {
        return View("logement/creer_logement");
    }
}
