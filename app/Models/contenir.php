<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenir extends Model
{
    use HasFactory;

    // La table associée à ce modèle
    protected $table = 'contenir';

    // Indiquer que cette table n'a pas de clé primaire auto-incrémentée
    public $incrementing = false;

    // La clé primaire est une combinaison de plusieurs colonnes
    protected $primaryKey = ['id_reponse', 'id_question'];

    // Définir les colonnes qui sont assignables en masse
    protected $fillable = [
        'id_reponse',
        'id_question',
    ];

    // Définir la relation avec le modèle Reponse
    public function reponse()
    {
        return $this->belongsTo(Reponse::class, 'id_reponse', 'id_reponse');
    }

    // Définir la relation avec le modèle Question
    public function question()
    {
        return $this->belongsTo(Question::class, 'id_question', 'id_question');
    }
}
