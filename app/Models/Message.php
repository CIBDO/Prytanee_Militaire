<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    function details(){
        return $this->hasMany(MessageDetail::class,'id_message');
    }

    function expediteur(): BelongsTo
    {
        return $this->belongsTo(Compte::class,'id_expediteur');
    }
    function destinataire(): BelongsTo
    {
        return $this->belongsTo(Compte::class,'id_destinataire');
    }
}
