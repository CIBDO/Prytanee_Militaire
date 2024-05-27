<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Compte;
use App\Models\Inscription;
use App\Models\Matiere;
use App\Models\Note;
use App\Models\ParentEleve;
use App\Models\Etudiant;
use App\Models\Periode;
use DateTime;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * @param Request $request
     * @param Collection $eleves
     * @return Collection
     */
    public static function elevesFilter(Request $request, Collection $eleves): Collection
    {
        if ($request->has('genre') && $request->genre) {
            $eleves = $eleves->filter(function ($item) use ($request) {
                // Condition de recherche
                return $item->genre === $request->genre;
            });
        }

        if ($request->has('classe') && $request->classe) {
            $eleves = $eleves->filter(function ($item) use ($request) {
                // Condition de recherche
//                dd($item->id_classe,$request->classe,$item->id_classe == $request->classe);
                return $item->id_classe == $request->classe;
            });
        }

        if ($request->has('matricule') && $request->matricule) {
            $eleves = $eleves->filter(function ($item) use ($request) {
                // Condition de recherche
                return $item->matricule === $request->matricule;
            });
        }

//        dd($eleves);
        return $eleves;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $eleves =  Etudiant::all()->filter(function ($item){
            return $item->inscription()?->etat == 1;
        });
        $eleves = self::elevesFilter($request, $eleves);
        return view('pages.eleves.liste', compact('eleves'));


    }
    public function presInscrits(Request $request)
    {
        $eleves =  Etudiant::all()->filter(function ($item){
            return $item->presInscription()?->etat;
        });
        $eleves = self::elevesFilter($request, $eleves);
        return view('pages.eleves.pres-inscrits', compact('eleves'));
    }
    public function nonInscrits(Request $request)
    {
        $eleves =  Etudiant::all()->filter(function ($item){
            return $item->nonInscription();
        });
        $eleves = self::elevesFilter($request, $eleves);
        return view('pages.eleves.non-inscrits', compact('eleves'));
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
//        dd($request->all(), $request->photo);
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
            $filepath = $nom_fichier . "." . $extension;
            $photo->move($location, $filepath);
        }
        $eleve = new Etudiant();
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
        $eleve->photo = $filepath;
        $eleve->id_classe = $request->classe;
        $eleve->id_parent = $request->parent;
        if ($eleve->save()) {
            $compte = new Compte();
            $compte->id_utilisateur = $eleve->id;
            $compte->identifiant = $request->identifiant;
            $compte->mot_de_passe = bcrypt('azerty');
            $compte->type_compte = 'etudiant';
            $compte->save();
            flash()->success('Enregistrement', 'Elève enregistré avec succès.');
        } else {
            flash()->error('Enregistrement', 'Erreur lors de l\'enregistrement de l\'élève.');
        }
        return redirect()->route('eleves.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        $mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
        $types = ['Inscription', 'Scolarité', 'Tenue'];
        $matieres = $etudiant->matieres();
        $notes = $etudiant->notes;
        $eleve_periode = $etudiant->inscription()?->periode;
//        dd($etudiant->inscription());
//        $eleve_periode = '-';

        return view('pages.eleves.details', [
            'eleve' => $etudiant,
            'mois' => $mois,
            'types' => $types,
            'matieres' => $matieres,
            'notes' => $notes,
            'eleve_periode' => $eleve_periode
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
            $filepath = $nom_fichier . "." . $extension;
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
        if ($eleve->save()) {
            flash()->success('Modification', 'Elève modifié avec succès.');
        } else {
            flash()->error('Modification', 'Erreur lors de la modification de l\'élève.');
        }
        return redirect()->route('eleves.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $eleve = Etudiant::find($id);
        if ($eleve->delete()) {
            flash()->success('Suppression', 'Elève supprimé avec succès.');
        } else {
            flash()->error('Suppression', 'Erreur lors de la suppression de l\'élève.');
        }
        return redirect()->route('eleves.index');
    }

    public function paiement()
    {
        return view('pages.eleves.paiement', [
            'eleves' => Etudiant::all(),
            'periodes' => Inscription::where('id_eleve')
        ]);
    }

    public function paiementPost(Request $request, $id)
    {

    }
    public function saveEleveNotes(Request $request)
    {
        $eleve = Etudiant::find($request->eleve);
//        $matieres = $eleve->matieres();
//        dd($request->all());
        foreach ($request->note_classe as $key => $value) {
            $note = $this->getFirst($eleve, $key, $request, $value, 'Devoir');
            $note->type = 'Devoir';
            $note->trimestre = $request->trimestre;
            $note->save();
        }

        foreach ($request->note_examen as $key => $value) {
            $note = $this->getFirst($eleve, $key, $request, $value, 'Examen');
            $note->type = 'Examen';
            $note->save();
        }

        flash()->success('Enregistrement', 'Notes enregistrées avec succès.');
        return redirect()->route('classes.show', ['class'=>$request->classe_id]);
    }

    /**
     * @param $eleve
     * @param int|string $key
     * @param Request $request
     * @param mixed $value
     * @return Note
     */
    public function getFirst($eleve, int|string $key, Request $request, mixed $value, string $type): Note
    {
        $note = Note::where('id_eleve', $eleve->id)
            ->where('id_matiere', $key)
            ->where('id_periode', $request->periode)
            ->where('trimestre', $request->trimestre)
            ->where('type', $type)
            ->first();
        if (!$note) {
            $note = new Note();
        }
        $matiere = Matiere::find($key);
        $note->id_eleve = $eleve->id;
        $note->id_matiere = $key;
        $note->id_periode = $request->periode;
        $note->note = $value;
        $note->coefficient = $matiere->coef;
        $note->trimestre = $request->trimestre;
        return $note;
    }
}
