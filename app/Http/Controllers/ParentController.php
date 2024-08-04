<?php

namespace App\Http\Controllers;

use App\Models\ParentEleve;
use HepplerDotNet\FlashToastr\Flash;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.parents.index', [
            'parents' => ParentEleve::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.parents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
        ]);

        $parent = new ParentEleve();
        $parent->prenom = $request->prenom;
        $parent->nom = $request->nom;
        $parent->fonction = $request->fonction;
        $parent->email = $request->email;
        $parent->adresse = $request->adresse;
        $parent->telephone = $request->telephone;
        $parent->save();
        $user = $parent->user()->create([
            'email' => $request->email,
            'name' => $request->prenom . ' ' . $request->nom,
            'login' => $request->email, // 'login' is the same as 'email
            'password' => bcrypt('password'),
        ]);
        $parent->user_id = $user->id;
        $parent->save();
        flash()->success('Enregistrement', 'Parent enregistré avec succès.');

        return redirect()->route('parents.index');


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

        return view('pages.parents.edit', [
            'parent' => ParentEleve::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
        ]);

        $parent = ParentEleve::findOrFail($id);
        $parent->prenom = $request->prenom;
        $parent->nom = $request->nom;
        $parent->fonction = $request->fonction;
        $parent->email = $request->email;
        $parent->adresse = $request->adresse;
        $parent->telephone = $request->telephone;
        $parent->save();

        $user = $parent->user;
        if ($user) {
            $user->email = $request->email;
            $user->name = $request->prenom . ' ' . $request->nom;
            $user->login = $request->email;
            $user->save();
        }

        flash()->success('Modification', 'Parent mis à jour avec succès.');

        return redirect()->route('parents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parent = ParentEleve::findOrFail($id);

        // Optionally, handle associated user deletion
        $user = $parent->user;
        if ($user) {
            $user->delete();
        }

        $parent->delete();

        flash()->success('Suppression', 'Parent supprimé avec succès.');

        return redirect()->route('parents.index');
    }
}
