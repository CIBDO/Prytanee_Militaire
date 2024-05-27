<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Inscription;
use App\Models\PaiementEleve;
use App\Models\ParentEleve;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __invoke()
    {
        //Nombre d'etudiants inscrits
        $etudiantsInscrits = Inscription::where('etat',1)->get();
        $nombreEleves= $etudiantsInscrits->count();



        //Nombre d'enseignants
        $enseignants = Enseignant::all();
        $nombreEnseignants = $enseignants->count();
        //Nombre de parents
        $parents = ParentEleve::all();
        $nombreParents = $parents->count();
        //Montant total des paiements eleves
        $paiementsEleves = PaiementEleve::all();
        $montantTotalPaiementsEleves = $paiementsEleves->sum('montant');

        //Nombre de filles
        $filles = Etudiant::where('genre','Fille')->get();
        $nombreFilles =  DB::table('inscriptions')
            ->join('etudiants', 'inscriptions.id_eleve', '=', 'etudiants.id')
            ->where('inscriptions.etat',1)
            ->where('etudiants.genre', '=', 'Fille')
            ->count();;
        //Nombre de garcons
        $garcons = Etudiant::where('genre','Garçon')->get();
        $nombreGarcons = DB::table('inscriptions')
            ->join('etudiants', 'inscriptions.id_eleve', '=', 'etudiants.id')
            ->where('inscriptions.etat',1)
            ->where('etudiants.genre', '=', 'Garçon')
            ->count();


        return view('pages.dashboard',[
            'nombreEleves' => $nombreEleves,
            'nombreEnseignants' => $nombreEnseignants,
            'nombreParents' => $nombreParents,
            'montantTotalPaiementsEleves' => $montantTotalPaiementsEleves,
            'nombreFilles' => $nombreFilles,
            'nombreGarcons' => $nombreGarcons,
        ]);
    }
}
