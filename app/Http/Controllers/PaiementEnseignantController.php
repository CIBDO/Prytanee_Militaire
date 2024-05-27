<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\PaiementEnseignant;
use DateTime;
use Illuminate\Http\Request;

class PaiementEnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.enseignants.paiement', [
            'enseignants' => Enseignant::all(),
            'paiements' => PaiementEnseignant::all()
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
        $paiement = new PaiementEnseignant();
        $paiement->id_enseignant = $request->id_enseignant;
        $paiement->montant = $request->montant;
        $paiement->motif = $request->motif;
        $date_obj = DateTime::createFromFormat('d/m/Y', $request->date_paiement);
        $date_format_mysql = $date_obj->format('Y-m-d');
        $paiement->date_paiement = $date_format_mysql;
        if ( $paiement->save()) {
            flash()->success('Enregistrement', 'Paiement enregistré avec succès.');
        } else {
            flash()->error('Enregistrement', 'Erreur lors de l\'enregistrement du paiement.');
        }
        return redirect()->route('paiement-enseignant.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(PaiementEnseignant $paiementEnseignant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaiementEnseignant $paiementEnseignant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaiementEnseignant $paiementEnseignant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $paiement_enseignant = PaiementEnseignant::find($id);
        $paiement_enseignant->forceDelete();
        flash()->success('Suppression','Paiement supprimé avec succès
        .');
        return redirect()->route('paiement-enseignant.index');
    }
}
