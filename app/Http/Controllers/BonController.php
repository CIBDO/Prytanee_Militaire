<?php

namespace App\Http\Controllers;

use App\Models\Bon;
use Illuminate\Http\Request;

class BonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        flash()->error('Logout successfull','You have been logged out.');


        return view('pages.bons.index', [
            'bons' => Bon::all()
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
        $bon = new bon();
        $bon->description = $request->description;
        $bon->montant = $request->montant;
        $bon->date_reception = date('Y-m-d', strtotime($request->date_reception));
        $bon->save();
        flash()->success('Enregistrement','bon enregistré avec succès.');
        return redirect()->route('bons.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(bon $bon)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bon $bon)
    {
        return view('pages.bons.index', [
            'bons' => Bon::all(),
            'bon' => $bon,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bon = Bon::find($id);
        $bon->description = $request->description;
        $bon->montant = $request->montant;
        $bon->date_reception = date('Y-m-d', strtotime($request->date_reception));
        $bon->save();
        flash()->success('Modification','bon modifié avec succès.');
        return redirect()->route('bons.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bon = Bon::find($id);
        $bon->delete();
        flash()->success('Suppression','bon supprimé avec succès.');
        return redirect()->route('bons.index');
    }
}
