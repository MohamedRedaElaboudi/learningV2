<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Personne extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = 'personnes';

    protected $primaryKey = 'id_personne';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
