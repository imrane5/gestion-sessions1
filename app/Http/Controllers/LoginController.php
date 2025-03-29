<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller { 

    // Afficher le formulaire de connexion 
    public function showLoginForm() { 
        return view('auth.login'); 
    }

    // Traiter la connexion 
    public function login(Request $request) { 
        $credentials = $request->validate([ 'email' => 'required|email', 'mot_de_passe' => 'required' ]); 

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['mot_de_passe']])) { 

            return redirect('/session')->with('success', 'Connexion réussie.'); 
            
        } return back()->withErrors(['email' => 'Identifiants incorrects']); 
    } 
}
