<?php

namespace App\Models;

use App\helpers\Helpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Matiere extends Model
{
    use HasFactory;

    function classe(){
        return $this->belongsTo(Classe::class,'classe_id');
    }
    function notes(){
        return $this->hasMany(Note::class,'id_matiere');
    }
    function etudiantNotes($id_etudiant,$id_periode,$trimestre){
        $noteDevoirs = $this->notes()
            ->where('id_eleve',$id_etudiant)
            ->where('id_periode',$id_periode)
            ->where('type','Devoir')
            ->where('trimestre',$trimestre)
            ->get();
        $moyenneDevoirs = 0;
        if ($noteDevoirs->count() > 0){
            $moyenneDevoirs = $noteDevoirs->sum('note')/$noteDevoirs->count();
        }

        $noteCompositions = $this->notes()
            ->where('id_eleve',$id_etudiant)
            ->where('id_periode',$id_periode)
            ->where('type','Examen')
            ->where('trimestre',$trimestre)
            ->get();

        $moyenneCompositions = 0;
        if ($noteCompositions->count() > 0){
            $moyenneCompositions = $noteCompositions->sum('note')/$noteCompositions->count();
        }
        $moyenne = ($moyenneDevoirs + $moyenneCompositions*$this->coef)/($this->coef+1);
        $notecoefficient = $moyenneDevoirs + $moyenneCompositions*$this->coef;
        return [
            'devoirs'=>$noteDevoirs,
            'compositions'=>$noteCompositions,
            'moyenne'=>$moyenne,
            'moyenneDevoirs'=>$moyenneDevoirs,
            'moyenneCompositions'=>$moyenneCompositions,
            'appreciation'=>Helpers::appreciation($moyenne),
            'notecoefficient'=>$notecoefficient
        ];
    }
}
