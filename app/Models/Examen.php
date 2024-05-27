<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'id_classe');
    }
    public function periode(){
        return $this->belongsTo(Periode::class,'id_periode');
    }
}
