<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentEleve extends Model
{
    use HasFactory;
    protected $table = 'parents';

    // Définir l'attribut calculé
    public function getNomCompletAttribute()
    {
        // Calculer et retourner la valeur de l'attribut
        return $this->prenom . ' ' . $this->nom;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public  function enfants(){
        return $this->hasMany(Etudiant::class, 'id_parent');
    }

}
