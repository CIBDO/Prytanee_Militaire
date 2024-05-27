<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageDetail extends Model
{
    use HasFactory;


    public function compte(){
        return $this->belongsTo(Compte::class,'id_compte');
    }
}
