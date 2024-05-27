<?php

namespace App\Http\Controllers;

use App\Models\Depense;
use Illuminate\Http\Request;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        flash()->error('Logout successfull','You have been logged out.');


        return view('pages.depenses.index', [
            'depenses' => Depense::all()
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
        //fait moi l\enregistrement du bon
        $depense= new depense();
        $depense->description = $request->description;
        $depense->montant = (int)$request->montant;
        $depense->date_depense = date('Y-m-d', strtotime($request->date_depense));
//        dd($depense);
        $depense->save();
        flash()->success('Enregistrement','bon enregistré avec succès.');
        return redirect()->route('depenses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Depense $depense)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Depense $depense)
    {
        return view('pages.depenses.index', [
            'depenses' => Depense::all(),
            'depense' => $depense,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $depense= Depense::find($id);
        $depense->description = $request->description;
        $depense->montant = $request->montant;
        $depense->date_depense = date('Y-m-d', strtotime($request->date_depense));
        $depense->save();
        flash()->success('Modification','bon modifié avec succès.');
        return redirect()->route('depenses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $depense= Depense::find($id);
        $depense->delete();
        flash()->success('Suppression','bon supprimé avec succès.');
        return redirect()->route('depenses.index');
    }
}
