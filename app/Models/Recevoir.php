<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recevoir extends Model
{
    use HasFactory;

    protected $table = 'recevoir';

    public $incrementing = false;

    protected $primaryKey = ['id_personne', 'id_ressource'];

    protected $fillable = [
        'id_personne',
        'id_ressource',
        'message',
    ];

    /**
     * Relation avec le modèle Etudiant.
     */
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_personne');
    }

    /**
     * Relation avec le modèle Ressource.
     */
    public function ressource()
    {
        return $this->belongsTo(Ressource::class, 'id_ressource');
    }
}
