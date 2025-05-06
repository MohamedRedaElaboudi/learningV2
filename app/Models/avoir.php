<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avoir extends Model
{
    use HasFactory;

    // La table associée à ce modèle
    protected $table = 'avoir';

    // Indiquer que cette table n'a pas de clé primaire auto-incrémentée
    public $incrementing = false;

    // La clé primaire est une combinaison de plusieurs colonnes
    protected $primaryKey = ['id_question', 'id_ressource'];

    // Définir les colonnes qui sont assignables en masse
    protected $fillable = [
        'id_question',
        'id_ressource',
    ];

    // Définir la relation avec le modèle Question
    public function question()
    {
        return $this->belongsTo(Question::class, 'id_question', 'id_question');
    }

    // Définir la relation avec le modèle Ressource
    public function ressource()
    {
        return $this->belongsTo(Ressource::class, 'id_ressource', 'id_ressource');
    }
}
