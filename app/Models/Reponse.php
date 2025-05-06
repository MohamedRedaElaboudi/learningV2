<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_question'; // Clé primaire personnalisée

    protected $fillable = [
        'question',
        'date_question',
    ];

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'repondre', 'id_reponse', 'id_personne');
    }
    





}
