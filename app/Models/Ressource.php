<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ressource'; // spécifie la clé primaire personnalisée

    protected $fillable = [
        'titre_ressource',
        'date_publication',
        'emplacement',
        'type',
    ];

    public function professeurs()
    {
        return $this->belongsToMany(Professeur::class, 'publier', 'id_ressource', 'id_personne');
    }
    



}
