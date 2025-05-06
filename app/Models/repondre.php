<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class repondre extends Pivot
{
    protected $table = 'repondre';
    public $timestamps = false;

    protected $fillable = [
        'id_personne',
        'id_reponse',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_personne');
    }

    public function reponse()
    {
        return $this->belongsTo(Reponse::class, 'id_reponse');
    }
}
