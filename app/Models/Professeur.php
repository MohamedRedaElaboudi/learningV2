<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Professeur extends Model
{
    protected $table = 'professeurs';
    protected $primaryKey = 'id_personne';
    public $incrementing = false; // car id_personne n'est pas auto-incrémenté
    protected $keyType = 'unsignedBigInteger';

    protected $fillable = [
        'id_personne',
        'biographie',
        'photo',
    ];

    /**
     * Relation avec la table personnes (clé étrangère).
     */
    public function personne(): BelongsTo
    {
        return $this->belongsTo(Personne::class, 'id_personne');
    }
    public function ressourcesPubliees()
    {
        return $this->belongsToMany(Ressource::class, 'publier', 'id_personne', 'id_ressource');
    }
    

}
