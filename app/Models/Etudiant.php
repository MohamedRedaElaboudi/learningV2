<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public $timestamps = false;
    protected $table = 'etudiants';
    protected $primaryKey = 'id_personne';

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

    /**
     * Exemple de relation avec les questions créées par l'étudiant.
     */
    public function questionsCreees()
    {
        return $this->belongsToMany(Question::class, 'creer', 'id_personne', 'id_question');
    }

    /**
     * Exemple de relation avec les ressources consultées.
     */
    public function ressourcesConsultees()
    {
        return $this->belongsToMany(Ressource::class, 'consulter', 'id_personne', 'id_ressource');
    }
    public function classes()
{
    return $this->belongsToMany(Classe::class, 'inscrire', 'id_personne', 'id_classe')
                ->withPivot('date_inscription');
}
public function notificationsRecues()
{
    return $this->belongsToMany(Notification::class, 'recevoir', 'id_personne', 'id_notification');
}
public function reponses()
{
    return $this->belongsToMany(Reponse::class, 'repondre', 'id_personne', 'id_reponse');
}

}

