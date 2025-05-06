<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulter extends Model
{
    protected $table = 'consulter';
    public $timestamps = false; // Pas de colonnes created_at / updated_at
    public $incrementing = false; // Clé primaire composée
    protected $primaryKey = null; // Nécessaire quand on utilise une clé composée

    protected $fillable = [
        'id_personne',
        'id_ressource',
    ];

    /**
     * Relation avec l'étudiant (personne).
     */
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_personne');
    }

    /**
     * Relation avec la ressource.
     */
    public function ressource()
    {
        return $this->belongsTo(Ressource::class, 'id_ressource');
    }
}
