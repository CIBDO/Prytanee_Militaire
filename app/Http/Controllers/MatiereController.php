<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\Enseignant;
use App\Models\Note;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.matieres.liste', [
            'matieres' => Matiere::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.matieres.formulaire', [
            'enseignants' => Enseignant::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matiere = new Matiere();
        $matiere->nom_matiere = $request->nom_matiere;
        $matiere->coef = $request->coef;
        $matiere->classe_id = $request->classe_id;
        $matiere->save();
        flash()->success('Enregistrement','Matière enregistrée avec succès.');
        return redirect()->route('matieres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matiere $matiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matiere $matiere)
    {
//        $matiere = Matiere::find($matiere);
        return view('pages.matieres.formulaire', [
            'matiere' => $matiere,
            'enseignants' => Enseignant::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $matiere)
    {
        $matiere = Matiere::find($matiere);
        $matiere->nom_matiere = $request->nom_matiere;
        $matiere->coef = $request->coef;
        $matiere->classe_id = $request->classe_id;
        $matiere->save();
        flash()->success('Modification','Matière modifiée avec succès.');
        return redirect()->route('matieres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matiere $matiere)
    {
        $matiere = Matiere::find($matiere);
        $matiere->delete();
        flash()->success('Suppression','atière supprimée avec succès.');
        return redirect()->route('matieres.index');
    }
}
