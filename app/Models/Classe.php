<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe extends Model
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
        'id_prof',
    ];

    // Désactiver les timestamps si la table ne les utilise pas
    public $timestamps = false;


    public function professeur()
    {
        return $this->belongsTo(Professeur::class, 'id_prof');
    }


}
