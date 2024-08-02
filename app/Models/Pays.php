<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Pays extends Model
{
    protected $table = 'pays';
    use HasFactory;
    public function eleves()
    {
        return $this->hasMany(Etudiant::class);
    }

}
