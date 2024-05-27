<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $table = 'inscriptions';

    public function eleve()
    {
        return $this->belongsTo(Etudiant::class, 'id_eleve');
    }
    public function classe()
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'id_periode');
    }
}
