<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Personne;

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
        // Validation des données du formulaire de connexion
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentative d'authentification avec email et mot de passe
        $user = Personne::where('email', $request->email)->first();

        // Vérification si l'utilisateur existe et si le mot de passe est correct
        if ($user && Hash::check($request->password, $user->password)) {
            // Authentifier l'utilisateur en utilisant son ID, sans implémenter l'interface Authenticatable
            Auth::loginUsingId($user->id_personne);

            
            $isProfesseur = \DB::table('professeurs')->where('id-personne', $user->id_personne)->exists();
            
            
            $isEtudiant = \DB::table('etudiants')->where('id-personne', $user->id_personne)->exists();
            
            
            if ($isProfesseur) {
                return redirect()->route('professeur.dashboard');
            } elseif ($isEtudiant) {
                return redirect()->route('cours.mescours');
                    }}

        // Si l'email ou le mot de passe est incorrect
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

        $request->session()->regenerateToken();

        // Rediriger l'utilisateur vers la page de connexion
        return redirect('/login');
    }
}