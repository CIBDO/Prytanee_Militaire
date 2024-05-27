<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;
    function matiere(): BelongsTo
    {
        return $this->belongsTo(Matiere::class,'id_matiere');
    }
    function etudiant(): BelongsTo
    {
        return $this->belongsTo(Etudiant::class,'id_etudiant');
    }

    function periode()
    {
        return $this->belongsTo(Periode::class,'id_periode');
    }
}
