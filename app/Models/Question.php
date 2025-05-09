<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $primaryKey = 'id_question'; 

    protected $fillable = [
        'question',
        'id_ressource',
    ];
    
    public function ressource()
    {
        return $this->belongsTo(Ressource::class, 'id_ressource');
    }

}
