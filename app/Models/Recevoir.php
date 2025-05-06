<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Recevoir extends Pivot
{
    protected $table = 'recevoir';
    public $timestamps = false;

    protected $fillable = [
        'id_personne',
        'id_notification',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_personne');
    }

    public function notification()
    {
        return $this->belongsTo(Notification::class, 'id_notification');
    }
}
