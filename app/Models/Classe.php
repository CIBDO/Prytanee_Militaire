<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Classe extends Model
{
    use HasFactory;

    function enseignant(): BelongsTo
    {
        return $this->belongsTo(Enseignant::class,'id_enseignant');
    }
    function eleves(){
        return $this->hasMany(Etudiant::class,'id_classe');
    }
    function elevesInscris(){
        return $this->eleves()->whereHas('inscriptions',function ($query){
            $query->where('etat',1);
        });
    }
    function matieres(){
        return $this->hasMany(Matiere::class,'classe_id');
    }
}
