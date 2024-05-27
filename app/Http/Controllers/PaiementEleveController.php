<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Compte;
use App\Models\Enseignant;
use App\Models\Inscription;
use App\Models\PaiementEleve;
use App\Models\PaiementEnseignant;
use App\Models\ParentEleve;
use App\Models\Etudiant;
use App\Models\Periode;
use DateTime;
use Illuminate\Http\Request;

class PaiementEleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.eleves.paiement', [
            'paiements' => PaiementEleve::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.eleves.formulaire', [
            'classes' => Classe::all(),
            'parents' => ParentEleve::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

//        dd($request->all());
        $paiement = new PaiementEleve();
        $paiement->id_eleve = $request->id_eleve;
        $paiement->id_inscription = $request->id_inscription;
        $paiement->montant = $request->montant;
        $paiement->type_paiement = $request->type_paiement;
        $date_obj = DateTime::createFromFormat('d/m/Y', $request->date_paiement);
        $date_format_mysql = $date_obj->format('Y-m-d');
        $paiement->date_paiement = $date_format_mysql;
        $paiement->mois = $request->mois;
        if ( $paiement->save()){
            flash()->success('Enregistrement', 'Paiement enregistré avec succès.');
        }else{
            flash()->error('Enregistrement', 'Erreur lors de l\'enregistrement du paiement.');
        }

        return redirect()->route('eleves.show',['eleve' => $paiement->id_eleve]);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
//        dd($etudiant);
        $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        return view('pages.eleves.details', [
            'eleve' => $etudiant,
            'mois' => $mois,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $eleve)
    {
        return view('pages.eleves.formulaire', [
            'eleve' => $eleve,
            'classes' => Classe::all(),
            'parents' => ParentEleve::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $eleve = Etudiant::find($id);
        $photo = $request->photo;
        $filepath = null;
        if ($photo) {
//            $filename = $photo->getClientOriginalName();
            $id_unique = uniqid('photo', true);
            $timestamp = time();
            $nom_fichier = md5($id_unique . $timestamp);
            $extension = $photo->getClientOriginalExtension();
            $tempPath = $photo->getRealPath();
            $fileSize = $photo->getSize();
            $location = 'uploads_photos';
            $filepath = $nom_fichier.".".$extension;
            $photo->move($location, $filepath);
            $eleve->photo = $filepath;
        }
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $date_obj = DateTime::createFromFormat('d/m/Y', $request->date_naissance);
        $date_format_mysql = $date_obj->format('Y-m-d');
        $eleve->date_naissance = $date_format_mysql;
        $eleve->lieu_naissance = $request->lieu_naissance;
        $eleve->genre = $request->genre;
        $eleve->adresse = $request->adresse;
        $eleve->telephone = $request->telephone;
        $eleve->email = $request->email;
        $eleve->religion = $request->religion;
        $eleve->group_sanguin = $request->groupe_sanguin;
        $eleve->id_classe = $request->classe;
        $eleve->id_parent = $request->parent;
        if ($eleve->save()){
            flash()->success('Modification','Elève modifié avec succès.');
        }else{
            flash()->error('Modification','Erreur lors de la modification de l\'élève.');
        }
        return redirect()->route('eleves.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paiement = PaiementEleve::find($id);
        if ($paiement->delete()){
            flash()->success('Suppression','Paiement supprimé avec succès.');
        }else{
            flash()->error('Suppression','Erreur lors de la suppression du paiement.');
        }
        return redirect()->route('eleves.show',['eleve' => $paiement->id_eleve]);
    }

    public function paiementEnseignant(){
        return view('pages.enseignants.paiement', [
            'enseignants' => Enseignant::all(),
            'types'=> ['Salaire', 'Prime', 'Autre'],
            'paiements'=> PaiementEnseignant::all(),
        ]);
    }
    public function paiementPost(Request $request, $id)
    {

    }
}
