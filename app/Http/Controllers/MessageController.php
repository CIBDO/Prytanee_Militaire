<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Message;
use App\Models\MessageDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinataires = [
            'parents' => Compte::where('type_compte', 'parent')->whereNotIn('id_utilisateur',[auth()->user()->id_utilisateur])->get(),
            'eleves' => Compte::where('type_compte', 'etudiant')->whereNotIn('id_utilisateur',[auth()->user()->id_utilisateur])->get(),
            'enseignants' => Compte::with('enseignant')->where('type_compte', 'enseignant')->whereNotIn('id_utilisateur',[auth()->user()->id_utilisateur])->get(),
            'administrateurs' => Compte::where('type_compte', 'administrateur')->whereNotIn('id_utilisateur',[auth()->user()->id_utilisateur])->get(),
        ];
        return view('pages.messages.nouveau_message',[
            'destinataires' => $destinataires
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->id_destinataire = $request->destinataire;
        $message->id_expediteur = auth()->user()->id_utilisateur;
        $message->objet = $request->objet;
        if ($message->save()){
            flash()->success('Enregistrement','Message envoyé avec succès.');
        }else{
            flash()->error('Erreur','Erreur lors de l\'envoi du message.');
        }
        return redirect()->route('messages.envoi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view('pages.messages.detail',[
            'message' => $message
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }

    public function reception()
    {
        return view('pages.messages.reception', [
            'messages' => Message::all()
        ]);
    }

    public function envoi()
    {
        return view('pages.messages.envoi', [
            'messages' => Message::all()
        ]);
    }
    public function responseStore(Request $request){

        $message = new MessageDetail();
        $message->id_message = $request->id_message;
        $message->contenu = $request->message;
        $message->id_compte = auth()->user()->id;
        if ($message->save()){
            flash()->success('Enregistrement','Message envoyé avec succès.');
        }else{
            flash()->error('Erreur','Erreur lors de l\'envoi du message.');
        }
        return redirect()->back();
    }
}
