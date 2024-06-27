<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Compte extends Authenticatable
{
    use Notifiable;



    protected $fillable = [
        'id', 'mot_de_passe', 'identifiant',
    ];
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }

    public function username()
    {

        return 'identifiant';
    }

    protected $hidden = [
        'mot_de_pass', 'remember_token',
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @return BelongsTo
     */
    function enseignant(){
        return $this->belongsTo(Enseignant::class,'id_utilisateur');
    }

    function infos(){
        if ($this->type_compte == 'etudiant'){
            return $this->belongsTo(Etudiant::class,'id_utilisateur');
        }elseif ($this->type_compte =='parent'){
            return $this->belongsTo(ParentEleve::class,'id_utilisateur');
        }elseif ($this->type_compte =='enseignant'){
            return $this->belongsTo(Enseignant::class,'id_utilisateur');
        }elseif ($this->type_compte=='administrateur'){
            return $this->belongsTo(Administrateur::class,'id_utilisateur');
        }else{
            return null;
        }
    }

    function receptions(){
        return Message::where('id_destinataire',Auth::id())->get();
    }
    function envois(){
        return Message::where('id_expediteur',Auth::id())->get();
    }
}
