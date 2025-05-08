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
        'id_admin',
    ];

    /**
     * Relation avec la table personnes (clé étrangère).
     */
    public function personne(): BelongsTo
    {
        return $this->belongsTo(Personne::class, 'id_personne');
    }

    
     /**
     * Relation avec l'administrateur (autre professeur).
     */
    public function administrateur()
    {
        return $this->belongsTo(Professeur::class, 'id_admin');
    }

    /**
     * Relation avec les professeurs supervisés par cet administrateur.
     */
    public function professeursSupervises()
    {
        return $this->hasMany(Professeur::class, 'id_admin');
    }

    

}
