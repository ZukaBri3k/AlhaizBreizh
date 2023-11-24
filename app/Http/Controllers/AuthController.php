<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(): View {
        return view('Compte.Login');
    }

    public function authenticate(Request $request)
    {
        dd($request);

        $request->validate([
            'email' => 'required|email',
            'mdp' => 'required',
            'typeCompte' => 'required'
        ]);

        if (auth()->attempt(['mail_pers' => $request->mail_pers, "password" => $request->mdp_pers])) {
            dd('réussi');
            $request->session()->regenerate();
            if (in_array('1', explode(' ', auth()->user()->role)) && $request->typeCompte == 'client') {
                return redirect()->route('myClientAccount');
            } else if (in_array('2', explode(' ', auth()->user()->role)) && $request->get('typeCompte') == 'proprietaire') {
                return redirect()->route('myProprietaireAccount');
            } else if (auth()->user()->role == '3') {
                return redirect()->route('myAdminAccount');
            }
        }
        return redirect()->back()->withErrors("Les identifiants sont incorrectes");
    }
    
    public function logout() {
        auth()->logout();

        return redirect()->route('login');
    }
}
