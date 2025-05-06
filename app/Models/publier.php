<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class publier extends Pivot
{
    protected $table = 'publier';
    public $timestamps = false;

    protected $fillable = [
        'id_personne',
        'id_ressource',
    ];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class, 'id_personne');
    }

    public function ressource()
    {
        return $this->belongsTo(Ressource::class, 'id_ressource');
    }
}
