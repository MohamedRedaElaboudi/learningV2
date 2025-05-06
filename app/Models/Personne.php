<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Personne extends Model implements Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'email';  // Utiliser l'email comme clé primaire
    public $incrementing = false;     // Désactiver l'auto-incrément
    protected $keyType = 'string';    // Le type de la clé primaire est une chaîne
    public $timestamps = false;       // Si vous n'avez pas de champs created_at et updated_at

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];

     
    public function getAuthIdentifierName()
    {
        return 'email';  
    }

    public function getAuthIdentifier()
    {
        return $this->email;  
    }

  
    public function getAuthPassword()
    {
        return $this->password;  
    }

    
    public function getRememberToken()
    {
        return $this->remember_token;  
    }

   
    public function setRememberToken($value)
    {
        $this->remember_token = $value;  
    }

    public function getRememberTokenName()
    {
        return 'remember_token';  
    }
}
