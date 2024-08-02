<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Inscription;
use App\Models\ParentEleve;
use App\Models\Pays;
use App\Models\Periode;
use DateTime;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.inscriptions.index', [
            'eleves' => Etudiant::all(),
            'classes' => Classe::all(),
            'periodes' => Periode::all(),
            'inscriptions' => Inscription::all(),
            'parents' => ParentEleve::all(),
            'pays'=>Pays::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'eleve' => 'required_if:flexCheckChecked,false|exists:eleves,id',
            'prenom' => 'required_if:flexCheckChecked,true|string|max:255',
            'nom' => 'required_if:flexCheckChecked,true|string|max:255',
            'genre' => 'required_if:flexCheckChecked,true|string|in:Garçon,Fille',
            'date_naissance' => 'required_if:flexCheckChecked,true|date_format:d/m/Y',
            'pays' => 'required_if:flexCheckChecked,true|exists:pays,id',
            'classe' => 'required|exists:classes,id',
            'groupe_sanguin' => 'required_if:flexCheckChecked,true|string|in:A+,A-,B+,B-,O+,O-',
            'religion' => 'required_if:flexCheckChecked,true|string|in:Islam,Chrétien,Hindou,Bouddhiste,Autres',
            'email' => 'required_if:flexCheckChecked,true|email|max:255',
            'parent' => 'required_if:flexCheckChecked,true|exists:parents,id',
            'telephone' => 'required_if:flexCheckChecked,true|string|max:20',
            'biographie' => 'required_if:flexCheckChecked,true|string',
            'photo' => 'required_if:flexCheckChecked,true|image|mimes:jpeg,png,jpg|max:2048',
            'periode' => 'required|exists:periodes,id',
            'date_inscription' => 'required|date_format:d/m/Y',
            'frais' => 'required|numeric',
        ]);
        dd($request->all());
        $inscription = new Inscription();
        $inscription->id_eleve = $request->eleve;
        $inscription->id_classe = $request->classe;
        $inscription->id_periode = $request->periode;
        $inscription->frais_inscription = $request->frais;
        $date_obj = DateTime::createFromFormat('d/m/Y', $request->date_inscription);
        $date_format_mysql = $date_obj->format('Y-m-d');
        $inscription->date_inscription = $date_format_mysql;
        $eleve_inscriptions =  Inscription::where('id_eleve', $inscription->id_eleve)->get();
        foreach ($eleve_inscriptions as $eleve_inscription){
            $eleve_inscription->etat = 0;
            $eleve_inscription->save();
        }
        if ($inscription->save()) {
            $eleve = Etudiant::find($inscription->id_eleve);
            $eleve->id_classe = $inscription->id_classe;
            $eleve->save();
            flash()->success('Inscription', 'Elève inscrit avec succès.');
        } else {
            flash()->error('Inscription', 'Erreur lors de l\'inscription de l\'élève.');
        }
        return redirect()->route('inscriptions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inscription = Inscription::find($id);
        if ($inscription->delete()){
            flash()->success('Suppression','Inscription supprimée avec succès.');
        }else{
            flash()->error('Suppression','Erreur lors de la suppression de l\'inscription.');
        }
        return redirect()->route('inscriptions.index');
    }
}
