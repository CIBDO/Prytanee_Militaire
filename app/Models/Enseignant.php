<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Enseignant extends Model
{
    use HasFactory;


    function classes_enseignants(){

        return $this->hasMany(ClasseEnseignant::class);
    }
    function matieres(){
        return $this->belongsToMany(Matiere::class,'classes_enseignants');
    }
    function classes(){
        return $this->belongsToMany(Classe::class,'classes_enseignants');
    }
    // Définir l'attribut calculé
    public function getNomCompletAttribute()
    {
        // Calculer et retourner la valeur de l'attribut
        return $this->prenom . ' ' . $this->nom;
    }
}
