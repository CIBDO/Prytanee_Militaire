<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.livres.liste', [
            'livres' => Livre::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.livres.formulaire', [
            'livres' => Livre::all(),
    
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $livre = new Livre();
        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->date_publication = $request->date_publication;
        $livre->save();
        flash()->success('Enregistrement','livre enregistrée avec succès.');
        return redirect()->route('livres.index');

        
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
        $livre = Livre::find($id);
        return view('pages.livres.formulaire', [
            'livre' => $livre,
    
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $livre = new Livre();
        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->date_publication = $request->date_publication;
        $livre->save();
        flash()->success('Modification','Livre modifiée avec succès.');
        return redirect()->route('livres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livre = Livre::find($id);
        $livre->delete();
        flash()->success('Suppression','Livre supprimée avec succès.');
        return redirect()->route('livres.index');
    }
}
