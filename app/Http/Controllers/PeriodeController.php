<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use DateTime;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        flash()->error('Logout successfull','You have been logged out.');


        return view('pages.periodes.index', [
            'periodes' => Periode::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->index();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //fait moi l\enregistrement du profil
        $periode = new Periode();
        $periode->nom = $request->nom;
        $periode->date_debut = date('Y-m-d',strtotime($request->date_debut));
        $periode->date_fin = date('Y-m-d',strtotime($request->date_fin));
        $periode->save();
        flash()->success('Enregistrement','Période enregistré avec succès.');
        return redirect()->route('periodes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periode $periode)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periode $periode)
    {
        return view('pages.periodes.index', [
            'periodes' => Periode::all(),
            'periode' => $periode,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $periode)
    {
//        dd($request->all());
        $periode->nom = $request->nom;
        $date = DateTime::createFromFormat('d/m/Y', $request->date_debut);
        $date_debut = $date->format('Y-m-d');
        $date = DateTime::createFromFormat('d/m/Y', $request->date_fin);
        $date_fin = $date->format('Y-m-d');

        $periode->date_debut = $date_debut;
        $periode->date_fin = $date_fin;
        $periode->save();
        flash()->success('Modification','Période modifié avec succès.');
        return redirect()->route('periodes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $periode = Periode::find($id);
        $periode->delete();
        flash()->success('Suppression','Période supprimé avec succès.');
        return redirect()->route('periodes.index');
    }
}
