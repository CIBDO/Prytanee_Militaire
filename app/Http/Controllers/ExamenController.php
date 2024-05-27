<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Examen;
use App\Models\Periode;
use App\Models\Profil;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        flash()->error('Logout successfull','You have been logged out.');


        return view('pages.examens.liste', [
            'examens' => Examen::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.examens.formulaire', [
            'periodes' => Periode::all(),
            'classes' => Classe::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //fait moi l\enregistrement du profil
        $examen = new Examen();
        $examen->date = $request->date;
        $examen->id_classe = $request->id_classe;
        $examen->id_periode = $request->id_periode;
        $examen->type = $request->type;
        $examen->title = $request->title;
        $examen->save();
        flash()->success('Enregistrement','Examen enregistré avec succès.');
        return redirect()->route('examens.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $examen = Examen::find($id);
        return view('pages.examens.formulaire', [
            'periodes' => Periode::all(),
            'classes' => Classe::all(),
            'examen' => $examen
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $examen = Examen::find($id);
        $examen->date = $request->date;
        $examen->id_classe = $request->id_classe;
        $examen->id_periode = $request->id_periode;
        $examen->type = $request->type;
        $examen->title = $request->title;
        $examen->save();
        flash()->success('Modification','Examen modifié avec succès.');
        return redirect()->route('examens.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $examen = Examen::find($id);
        $examen->delete();
        flash()->success('Suppression','Examen supprimé avec succès.');
        return redirect()->route('examens.index');
    }
}
