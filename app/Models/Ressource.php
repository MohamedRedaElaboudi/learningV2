<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    use HasFactory;
    protected $table = 'ressources';

    protected $primaryKey = 'id_ressource'; // spécifie la clé primaire personnalisée

    protected $fillable = [
        'titre_ressource',
        'emplacement',
        'type',
        'professeur_id',

    ];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class, 'professeur_id');
    }
    



}
