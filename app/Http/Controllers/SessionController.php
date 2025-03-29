<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    //
    public function logout(Request $request) { 
        Auth::logout(); 
        //supprimer toutes les données de la session 
        //invalidate() détruit complètement la session et génère un nouvel identifiant pour éviter les attaques de fixation de session. 
        $request->session()->invalidate(); 
        return redirect('/login')->with('success', 'Déconnexion réussie.');
    }

    public function storeSession(Request $request) { 
        $request->session()->put('username', 'KhalidBenabbes'); 
        return redirect('/session')->with('success', 'Nom d\'utilisateur stocké en session.'); 
    }

    public function getSession(Request $request) { 

        if ($request->session()->has('username')) { 
            return redirect('/session')->with('success', 'Utilisateur : ' . $request->session()->get('username')); 
        } 

        // Vérifier si l'utilisateur est authentifié 
        if (Auth::check()) { 
            $nomUtilisateur = Auth::user()->nom; 
            return redirect('/session')->with('success', 'Utilisateur : ' . $nomUtilisateur);
        }

        return redirect('/session')->with('error', 'Aucune session trouvée.');
    }


    public function deleteSession(Request $request) { 
        //Supprime une seule variable de la session 
        $request->session()->forget('username'); 
        return redirect('/session')->with('error', 'Session supprimée.'); 
    }


    public function clearAllSessions(Request $request) { 
        $request->session()->flush(); 
        return redirect('/session')->with('error', 'Toutes les sessions ont été supprimées.'); 
    }


    public function regenerateSession(Request $request) { 
        $request->session()->regenerate(); 
        return redirect('/session')->with('success', 'Session régénérée avec un nouvel ID:' . $request->session()->getId());
    }


    public function incrementCounter(Request $request) { 
        $count = $request->session()->get('counter', 0) + 1; 
        $request->session()->put('counter', $count); 
        return redirect('/session')->with('success', 'Nombre de visites : ' . $count);
    } 
    public function decrementCounter(Request $request) { 
        $count = max(0, $request->session()->get('counter', 0) - 1); 
        $request->session()->put('counter', $count); 
        return redirect('/session')->with('success', 'Nombre de visites : ' . $count); 
    }


    





}
