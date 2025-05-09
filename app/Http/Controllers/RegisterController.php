<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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

        // 2. Démarrage de la transaction
        try {
            DB::beginTransaction();

            // 3. Création de la personne
            $personne = Personne::create([
                'nom' => $request->name,
                'prenom' => $request->lastName,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Vérifier si l'ID de la personne a bien été créé
            if (!$personne->id_personne) {
                return redirect()->back()->with('error', 'Erreur lors de la création de l\'utilisateur.');
            }

            // 4. Création de l'étudiant
            Etudiant::create([
                'id_personne' => $personne->id_personne,
            ]);

            // 5. Si tout se passe bien, on valide la transaction
            DB::commit();

            return redirect()->route('login')->with('success', 'Compte créé avec succès !');
        } catch (\Exception $e) {
            // En cas d'erreur, on annule la transaction
            DB::rollBack();

            // Log l'erreur pour le débogage
            \Log::error('Erreur lors de la création du compte : ' . $e->getMessage());

            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'enregistrement.');
        }
    }

    public function showRegistrationForm()
    {
        return view('login.register');
    }
}
