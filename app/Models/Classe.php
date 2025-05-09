<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    // La table associée à ce modèle
    protected $table = 'classes';

    // La clé primaire de la table
    protected $primaryKey = 'id_classe';

    // Définir les colonnes qui sont assignables en masse
    protected $fillable = [
        'classe_nom',
        'code_classe',
    ];

    // Désactiver les timestamps si la table ne les utilise pas
    public $timestamps = true;


    public function etudiants()
{
    return $this->belongsToMany(Etudiant::class, 'inscrire', 'id_classe', 'id_personne')
                ->withPivot('date_inscription');
}

}
