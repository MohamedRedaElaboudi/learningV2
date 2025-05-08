<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscrire extends Model
{
    use HasFactory;

    protected $table = 'inscrire';

    public $incrementing = false;

    protected $primaryKey = ['id_personne', 'id_classe'];

    protected $fillable = [
        'id_personne',
        'id_classe',
        'date_inscription',
    ];

    /**
     * Relation avec le modèle Etudiant.
     */
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_personne');
    }

    /**
     * Relation avec le modèle Classe.
     */
    public function classe()
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }
}
