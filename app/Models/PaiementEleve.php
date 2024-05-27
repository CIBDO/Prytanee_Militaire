<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaiementEleve extends Model
{
    use HasFactory;

    protected $table = 'paiements_eleves';

    public function eleve(): BelongsTo
    {
        return $this->belongsTo(Etudiant::class,'id_eleve');
    }

    public function inscription(): BelongsTo
    {
        return $this->belongsTo(Inscription::class,'id_inscription');
    }

}
