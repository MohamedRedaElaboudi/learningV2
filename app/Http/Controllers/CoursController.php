<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classe;
use App\Models\Personne;

use App\Models\Inscrire;
use Illuminate\Support\Collection; 

class CoursController extends Controller
{
    // Vue des cours disponibles
    public function rejoindreshow()
    {
        return view('cours.rejoindre');
    }

    // Rejoindre une classe avec un code
    public function rejoindre(Request $request)
    {
        $etudiant = Auth::user();

        if (!$etudiant) {
            return to_route('login')->with('error', 'Veuillez vous connecter.');
        }

        $idEtudiant = $etudiant->id_personne;

        $classe = Classe::where('code_classe', $request->code)->first();

        if (!$classe) {
            return back()->with('error', 'La classe avec ce code n\'existe pas.');
        }

        $existingInscription = Inscrire::where('id_personne', $idEtudiant)
                                       ->where('id_classe', $classe->id_classe)
                                       ->first();

        if ($existingInscription) {
            return back()->with('error', 'Vous êtes déjà inscrit à cette classe.');
        }

        Inscrire::create([
            'id_personne' => $idEtudiant,
            'id_classe' => $classe->id_classe,
            'date_inscription' => now(),
        ]);

        return to_route('cours.mescours')->with('success', 'Inscription réussie à la classe.');
    }

    // Liste des cours auxquels l'étudiant est inscrit
    public function mesCoursInscrits()
    {
        $etudiant = Auth::user();
    
        if (!$etudiant) {
            return to_route('login')->with('error', 'Veuillez vous connecter.');
        }
    
        $idEtudiant = $etudiant->id_personne;
    
        $inscriptions = Inscrire::where('id_personne', $idEtudiant)->get();
    
        $classes = new Collection();
    
        foreach ($inscriptions as $inscription) {
            $classe = Classe::find($inscription->id_classe);
    
            if ($classe) {
                $professeur = Personne::find($classe->id_prof);
                $classe->professeur = $professeur; 
    
                $classes->push($classe);
            }
        }
    
        return view('cours.cards', ['classes' => $classes]);
    }
    
}
