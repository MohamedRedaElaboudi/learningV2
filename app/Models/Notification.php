<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_notification'; 
    protected $fillable = [
        'message',
    ];
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'recevoir', 'id_notification', 'id_personne');
    }
    



}
