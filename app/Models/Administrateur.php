<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Administrateur extends Model
{
    use HasFactory;

    protected $table = 'administrateurs';

    // Définir l'attribut calculé
    public function getNomCompletAttribute()
    {
        // Calculer et retourner la valeur de l'attribut
        return $this->prenom . ' ' . $this->nom;
    }
}
