<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Enseignant;
use App\Models\Matiere;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        dd(Classe::all()[0]->elevesInscris()->get());
        return view('pages.classes.liste', [
            'classes' => Classe::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.classes.formulaire', [
            'enseignants' => Enseignant::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $classe = new Classe();
        $classe->nom_classe = $request->nom;
//        $classe->niveau = $request->niveau;
//        $classe->id_enseignant = $request->enseignant;
        $classe->save();
        flash()->success('Enregistrement','Classe enregistrée avec succès.');
        return redirect()->route('classes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $classe = Classe::find($id);
        return view('pages.classes.details', [
            'classe' => $classe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $classe = Classe::find($id);
        return view('pages.classes.formulaire', [
            'classe' => $classe,
            'enseignants' => Enseignant::all(),
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $classe = Classe::find($id);
        $classe->nom_classe = $request->nom;
        $classe->niveau = $request->niveau;
        $classe->id_enseignant = $request->enseignant;
        $classe->save();
        flash()->success('Modification','Classe modifiée avec succès.');
        return redirect()->route('classes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $classe = Classe::find($id);
        $classe->delete();
        flash()->success('Suppression','Classe supprimée avec succès.');
        return redirect()->route('classes.index');
    }

    public function saveClasseMatiere(Request $request){
        $matiere = new Matiere();
        $matiere->nom_matiere = $request->nom_matiere;
        $matiere->coef = $request->coef;
        $matiere->classe_id = $request->classe_id;
        $matiere->save();
        flash()->success('Enregistrement','Matière enregistrée avec succès.');
        return redirect()->route('classes.show',$request->classe_id);
    }
}
