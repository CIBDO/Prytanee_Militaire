<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use App\Models\Compte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.comptes.liste', [
            'comptes' => Compte::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comptes.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $compte = new Compte();
        $compte->mot_de_passe = bcrypt('azerty');
        $compte->identifiant = $request->identifiant;
        $compte->type_compte = 'administrateur';
        if ($compte->save()) {
            $administrateur = new Administrateur();
            $administrateur->nom = $request->nom;
            $administrateur->prenom = $request->prenom;
            $administrateur->telephone = $request->telephone;
            $administrateur->email = $request->email;
            $administrateur->telephone = $request->telephone;
            $administrateur->save();
            $compte->id_utilisateur = $administrateur->id;
            $compte->save();
            flash()->success('Enregistrement','Compte enregistré avec succès.');

        } else {
            flash()->error('Erreur','Une erreur est survenue lors de l\'enregistrement.');
        }

        return redirect()->route('comptes.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Compte $compte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compte $compte)
    {
        return view('pages.comptes.formulaire',[
            'compte' => $compte
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $compte = Compte::find($id);
        $compte->identifiant = $request->identifiant;
        if ($compte->save()) {
            $administrateur = $compte->infos;
            $administrateur->nom = $request->nom;
            $administrateur->prenom = $request->prenom;
            $administrateur->telephone = $request->telephone;
            $administrateur->email = $request->email;
            $administrateur->telephone = $request->telephone;
            $administrateur->save();
            flash()->success('Modification','Compte modifié avec succès.');

        } else {
            flash()->error('Erreur','Une erreur est survenue lors de la modification.');
        }
        return redirect()->route('comptes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compte $compte)
    {
        //
    }
}
