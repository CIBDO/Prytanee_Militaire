<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
      /**
     * Afficher une liste de la ressource.
     */
    public function index(Request $request)
    {
        $id = $request->input('id');
        $nom = $request->input('nom');
        $contact = $request->input('contact');

        $enseignants = enseignant::where(function ($query) use ($id, $nom, $contact) {
            if (!empty($id)) {
                $query->where('id', $id);
            }
            if (!empty($nom)) {
                $query->where('nom', 'like', '%' . $nom . '%');
            }
            if (!empty($contact)) {
                $query->where('contact', 'like', '%' . $contact . '%');
            }
        })->get();

        return view('pages.enseignants.liste', [
            'enseignants' =>$enseignants
        ]);
    }

    /**
     * Afficher le formulaire de création d'une nouvelle ressource.
     */
    public function create()
    {
        return view('pages.enseignants.formulaire', [
            'enseignants' => Enseignant::all(),
        ]);
    }

    /**
     * Stocker une ressource nouvellement créée dans le stockage.
     */
    public function store(Request $request)
    {
        $enseignant = new Enseignant();
        $enseignant->nom = $request->nom;
        $enseignant->prenom = $request->prenom;
        $enseignant->sexe = $request->genre;
//        $enseignant->specialisation = $request->specialisation;
//        $enseignant->matiere_id = $request->matiere;
        $enseignant->date_naissance = $request->date_naissance;
        $enseignant->telephone = $request->telephone;
        $enseignant->email = $request->email;
        if ($enseignant->save()){
            $compte = new Compte();
            $compte->id_utilisateur = $enseignant->id;
            $compte->identifiant = $request->identifiant;
            $compte->mot_de_passe = bcrypt('azerty');
            $compte->type_compte = 'enseignant';
            $compte->save();

        }

        flash()->success('Enregistrement','Enseignant enregistrée avec succès.');
        return redirect()->route('enseignants.index');
    }

    /**
     * Afficher la ressource spécifiée.
     */
    public function show(Enseignant $enseignant)
    {

        return view('pages.enseignants.details',[
            'enseignant' => $enseignant
        ]);
    }

    /**
     * Afficher le formulaire de modification de la ressource spécifiée.
     */
    public function edit($id)
    {
        $enseignant = Enseignant::find($id);
        return view('pages.enseignants.formulaire', [
            'enseignant' => $enseignant,
            'enseignants' => Enseignant::all(),
        ]);
        /* $enseignant = Enseignant::find($id);
        return view('pages.enseignants.detail', [
            'enseignant' => $enseignant,
            'enseignants' => Enseignant::all(),
        ]); */
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cv = $request->cv;
        $enseignant = Enseignant::find($id);
        if ($cv) {
            $id_unique = uniqid('cv', true);
            $timestamp = time();
            $nom_fichier = md5($id_unique . $timestamp);
            $extension = $cv->getClientOriginalExtension();
            $location = 'uploads_cv';
            $filepath = $nom_fichier.".".$extension;
            $cv->move($location, $filepath);
            $enseignant->cv = $filepath;
        }
        $enseignant->nom = $request->nom;
        $enseignant->prenom = $request->prenom;
        $enseignant->sexe = $request->genre;
//        $enseignant->specialisation = $request->specialisation;
//        $enseignant->matiere_id = $request->matiere;
        $enseignant->date_naissance = $request->date_naissance;
        $enseignant->telephone = $request->telephone;
        $enseignant->email = $request->email;
        $enseignant->save();
        flash()->success('Modification','Enseignant modifiée avec succès.');
        return redirect()->route('enseignants.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $enseignant = Enseignant::find($id);
        $enseignant->forceDelete();
        flash()->success('Suppression','Enseignant supprimée avec succès
        .');
        return redirect()->route('enseignants.index');
    }
}
