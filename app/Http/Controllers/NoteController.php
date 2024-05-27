<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Etudiant;
use App\Models\Matiere;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.notes.liste', [
            'notes' => Note::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.notes.formulaire', [
            'notes' => Note::all(),
            'etudiants' => Etudiant::all(),
            'matieres' => Matiere::all(),


        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $eleve = Etudiant::find($request->id_eleve);
        $note = new Note();
        $note->note = $request->note;
        $note->id_matiere = $request->matiere;
        $note->id_eleve = $request->id_eleve;
        $note->id_periode = $eleve->inscription()->id_periode;
        $note->trimestre = $request->trimestre;
        $note->type = $request->type;

//        dd($note);
        $note->save();
        flash()->success('Enregistrement','Note enregistrée avec succès.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note = Note::find($id);
        return view('pages.notes.formulaire', [
            'note' => $note,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $note = new Note();
        $note->valeur = $request->valeur;
        $note->id_matiere = $request->id_matiere;
        $note->id_etudiant = $request->id_etudiant;
        $note->save();
        flash()->success('Modification','Note modifiée avec succès.');
        return redirect()->route('notes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note = Note::find($id);
        $note->delete();
        flash()->success('Suppression','Note supprimée avec succès.');
        return redirect()->back();
    }

}
