<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        flash()->error('Logout successfull','You have been logged out.');


        return view('pages.profils.index', [
            'profils' => Profil::all()
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
        $profil = new Profil();
        $profil->nom = $request->nom;
        $profil->save();
        flash()->success('Enregistrement','Profil enregistré avec succès.');
        return redirect()->route('profils.index');
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
    public function edit(Profil $profil)
    {
        return view('pages.profils.index', [
            'profils' => Profil::all(),
            'profil' => $profil,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil $profil)
    {
        $profil->nom = $request->nom;
        $profil->save();
        flash()->success('Modification','Profil modifié avec succès.');
        return redirect()->route('profils.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $profil = Profil::find($id);
        $profil->delete();
        flash()->success('Suppression','Profil supprimé avec succès.');
        return redirect()->route('profils.index');
    }
}
