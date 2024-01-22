<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Welcome extends Controller
{
    public function affichage() {
        return view('welcome');
    }
}
