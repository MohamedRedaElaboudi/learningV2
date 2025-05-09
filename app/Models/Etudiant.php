<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public $timestamps = false;
    protected $table = 'etudiants';
    protected $primaryKey = 'id_personne';
    public $incrementing = false;

    protected $fillable = [
        'id_personne',
    ];

    /**
     * Relation avec la personne.
     */
    public function personne()
    {
        return $this->belongsTo(Personne::class, 'id_personne');
    }

    
}

