<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;

    protected $table = 'reponses';

    protected $primaryKey = 'id_reponse';

    protected $fillable = [
        'reponse',
        'id_question',
        'id_reply',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'id_question');
    }

    /**
     * Relation avec la réponse parent (si c'est une sous-réponse).
     */
    public function parentReponse()
    {
        return $this->belongsTo(Reponse::class, 'id_reply');
    }

    /**
     * Relation avec les sous-réponses (réponses liées).
     */
    public function sousReponses()
    {
        return $this->hasMany(Reponse::class, 'id_reply');
    }
    





}
