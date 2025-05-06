<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // 1. Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:personnes,email',
            'password' => 'required|string|confirmed|min:4',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Création de la personne
        $personne = Personne::create([
            'nom' => $request->name,
            'prenom' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 3. Création de l’étudiant associé
        Etudiant::create([
            'id_personne' => $request->email, // ✔ id correct ici
        ]);

        // 4. Redirection après inscription
        return redirect()->route('login')->with('success', 'Compte créé avec succès !');
    }

    public function showRegistrationForm()
    {
        return view('login.register');
    }
}
