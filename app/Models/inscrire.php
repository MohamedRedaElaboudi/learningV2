<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class inscrire extends Pivot
{
    protected $table = 'inscrire';
    public $timestamps = false;

    protected $fillable = [
        'id_personne',
        'id_classe',
        'date_inscription',
    ];

    /**
     * Relation vers l'étudiant (personne).
     */
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_personne');
    }

    /**
     * Relation vers la classe.
     */
    public function classe()
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }
}
