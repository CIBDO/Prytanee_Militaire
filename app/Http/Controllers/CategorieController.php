<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.categories.index', [
            'categories' => Categorie::all()
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
        $categorie = new Categorie();
        $categorie->nom_categorie = $request->nom_categorie;
        $categorie->description = $request->description;
        $categorie->save();
        flash()->success('Enregistrement','Categorie enregistré avec succès.');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $categorie = Categorie::find($id);
        return view('pages.categories.index', [
            'categories' => Categorie::all(),
            'categorie' => $categorie,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        $categorie->nom_categorie = $request->nom_categorie;
        $categorie->description = $request->description;
        $categorie->save();
        flash()->success('Modification','Categorie modifié avec succès.');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();
        flash()->success('Suppression','Categorie supprimé avec succès.');
        return redirect()->route('categories.index');
    }
}
