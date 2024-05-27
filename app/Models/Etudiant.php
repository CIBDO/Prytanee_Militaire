<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Etudiant extends Model
{
    use HasFactory;

    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class,'id_classe');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(ParentEleve::class,'id_parent');
    }
    public function inscriptions(): HasMany
    {
        return $this->hasMany(Inscription::class,'id_eleve');
    }
    public function inscription()
    {
        return $this->inscriptions()->where('etat',1)->first();
    }
    public function presInscription()
    {
        return $this->inscriptions()->where('etat',2)->first();
    }
    public function nonInscription()
    {
        return $this->inscriptions()->count()===0;
    }
    public function periodes(): array
    {
        $periodes = [];
        foreach ($this->inscriptions as $inscription) {
            $periodes[] = $inscription->periode;
        }
        return $periodes;
    }

    public function paiements(): HasMany
    {
        return $this->hasMany(PaiementEleve::class,'id_eleve');
    }
    public  function matieres()
    {
        $inscription = $this->inscriptions()->where('etat',1)->first();
        if ($inscription){
//            dd($inscription->classe->matieres);
            return $inscription->classe->matieres??[];
        }
        return [];

    }

    public function notes(){
        return $this->hasMany(Note::class,'id_eleve');
    }

    // Définir l'attribut calculé
    public function getNomCompletAttribute()
    {
        // Calculer et retourner la valeur de l'attribut
        return $this->prenom . ' ' . $this->nom;
    }
}
