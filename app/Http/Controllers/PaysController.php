<?php
namespace App\Http\Controllers;
use App\Models\Pays;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.pays.index', [
            'pays' => Pays::all()
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
        $p = new Pays();
        $p->name = $request->name;
        $p->save();
        flash()->success('Enregistrement','Pays enregistré avec succès.');
        return redirect()->route('pays.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pays $p)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        return view('pages.pays.index', [
            'pays' => Pays::all(),
            'p' => Pays::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $p = Pays::find($id);
        $p->name = $request->name;
        $p->save();
        flash()->success('Modification','Pays modifié avec succès.');
        return redirect()->route('pays.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $p = Pays::find($id);
        $p->delete();
        flash()->success('Suppression','Pays supprimé avec succès.');
        return redirect()->route('pays.index');
    }

}
