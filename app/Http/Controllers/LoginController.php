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

        // Vérifie s'il est dans la table professeur
        $prof = Professeur::where('id_personne', $user->id_personne)->first();

        if ($prof) {
            if (is_null($prof->id_admin)) {
                // L'utilisateur est un admin
                session(['role' => 'admin']);
            } else {
                // L'utilisateur est un professeur
                session(['role' => 'professeur']);
            }
        } else {
            // Si ce n'est pas un professeur, c'est un étudiant
            session(['role' => 'etudiant']);
        }

        return redirect()->intended(); // Pas de redirection explicite vers un dashboard
    }

    // Cas où l'utilisateur est un invité ou les identifiants sont invalides
    session(['role' => 'guest']); // Facultatif ici, tu peux aussi ne rien mettre

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
        $request->session()->regenerateToken();

        // Rediriger l'utilisateur vers la page de connexion
        return redirect('/login');
    }
}