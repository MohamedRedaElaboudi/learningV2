<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personne extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_personne'; 
    public $incrementing = true; 
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
