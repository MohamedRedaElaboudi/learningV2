<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Personne;
use App\Models\Professeur;


class LoginController extends Controller
{
    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('login.login');
    }

    // Gère la connexion de l'utilisateur
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = Personne::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        Auth::loginUsingId($user->id_personne);

        $prof = Professeur::where('id_personne', $user->id_personne)->first();

        if ($prof) {
            // Stocker l'id du professeur
            session(['role' => 'professeur']);
            session(['id_prof' => $prof->id_prof]);


            // Vérifier s'il est également admin
            if (!is_null($prof->id_admin)) {
                session(['role' => 'admin']);
                session(['id_admin' => $prof->id_admin]);
            }

            return redirect()->route('dashboardprof');
        } else {
            // Étudiant
            session(['role' => 'etudiant']);
            return redirect()->route('cours.mescours');
        }
    }

    // Si les identifiants sont incorrects
    session(['role' => 'guest']);

    return back()->withErrors([
        'email' => 'Email ou mot de passe incorrect.',
    ])->withInput();
}


    // Gère la déconnexion de l'utilisateur
    public function logout(Request $request)
    {
        // Déconnecter l'utilisateur
        Auth::logout();

        // Invalider la session pour améliorer la sécurité
        $request->session()->invalidate();

        // Regénérer le token CSRF pour éviter les attaques CSRF
     // Rediriger l'utilisateur vers la page de connexion
        return redirect('/login');
    }
}