<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classe; 
use App\Models\Inscrire; 



class CoursController extends Controller
{
    public function mescours(){
        return view('cours.cards');
    }
    
    public function rejoindre(Request $request)
    {
        $etudiant = Auth::user();

        if (!$etudiant) {
            return to_route('login')->with('error', 'Vous devez être connecté pour rejoindre un cours.');
        }

        $emailEtudiant = $etudiant->email;

        $classe = Classe::where('code_classe', $request->code)->first();

        if (!$classe) {
            return back()->with('error', 'La classe avec ce code n\'existe pas.');
        }

        $existingInscription = Inscrire::where('id_personne', $emailEtudiant)
                                        ->where('id_classe', $classe->id_classe)
                                        ->first();

        if ($existingInscription) {
            return back()->with('error', 'Vous êtes déjà inscrit à cette classe.');
        }

        Inscrire::create([
            'id_personne' => $emailEtudiant,
            'id_classe' => $classe->id_classe,
            'date_inscription' => now(),
        ]);

        return to_route('cours.mescours')->with('success', 'Inscription réussie à la classe.');
    }
    public function mesCoursInscrits()
{
    $etudiant = Auth::user();

    if (!$etudiant) {
        return to_route('login')->with('error', 'Veuillez vous connecter.');
    }

    // On récupère les classes auxquelles l'étudiant est inscrit
    $inscriptions = Inscrire::where('id_personne', $etudiant->email)->get();

    $classes = [];

    foreach ($inscriptions as $inscription) {
        $classe = Classe::find($inscription->id_classe);
        if ($classe) {
            $classes[] = $classe;
        }
    }

    return view('cours.rejoindre', ['classes' => $classes]);
}
}

