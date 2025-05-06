<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lancer extends Model
{
    use HasFactory;

    // La table associée à ce modèle
    protected $table = 'lancer';

    // La clé primaire de la table
    protected $primaryKey = 'id_notification';

    // Indiquer que cette table n'a pas de clé primaire auto-incrémentée
    public $incrementing = false;

    // Définir les colonnes qui sont assignables en masse
    protected $fillable = [
        'id_notification',
        'id_ressource',
    ];

    // Définir la relation avec le modèle Notification
    public function notification()
    {
        return $this->belongsTo(Notification::class, 'id_notification', 'id_notification');
    }

    // Définir la relation avec le modèle Ressource
    public function ressource()
    {
        return $this->belongsTo(Ressource::class, 'id_ressource', 'id_ressource');
    }
}
