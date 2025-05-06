<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creer extends Model
{
    protected $table = 'creer';
    public $timestamps = false;
    public $incrementing = false; // Clé primaire composée
    protected $primaryKey = null;

    protected $fillable = [
        'id_personne',
        'id_question',
    ];

    /**
     * Relation avec l'étudiant.
     */
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_personne');
    }

    /**
     * Relation avec la question.
     */
    public function question()
    {
        return $this->belongsTo(Question::class, 'id_question');
    }
}
