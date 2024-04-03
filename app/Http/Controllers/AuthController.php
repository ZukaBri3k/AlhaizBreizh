<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function authenticate(Request $request)
    {
        //dd($request);

        $request->validate([
            'mail_pers' => 'required|email',
            'mdp_pers' => 'required',
            'typeCompte' => 'required'
        ]);

        auth()->logout();

        if (auth()->attempt(['mail_pers' => $request->mail_pers, "password" => $request->mdp_pers])) {
            $request->session()->regenerate();
            if (in_array('1', explode(' ', auth()->user()->role)) && $request->typeCompte == 'client') {
                return redirect()->back();
            } else if (in_array('2', explode(' ', auth()->user()->role)) && $request->get('typeCompte') == 'proprietaire') {
                return redirect()->back();
            } else if (auth()->user()->role == '3') {
                return redirect()->route('myAdminAccount');
            } else {
                $this->logout();
            }
        }
        return redirect()->back()->withErrors("Les identifiants sont incorrectes");
    }
    
    public function logout() {
        auth()->logout();

        return redirect()->route('accueil');
    }
}
