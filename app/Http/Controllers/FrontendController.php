<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Compte;
use App\Models\Etudiant;
use App\Models\Inscription;
use DateTime;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.accueil');
    }
    public function presentation(){
        return view('frontend.pages.apropos.presentation');
    }
    public function historique(){
        return view('frontend.pages.apropos.historique');
    }
    public function contact(){
        return view('frontend.pages.contact.contact');
    }
    public function cataloguesFormation(){
        return view('frontend.pages.formations.catalogues_formations');
    }
    public function calendrier(){
        return view('frontend.pages.formations.calendrier');
    }
    public function informationOrientation(){
        return view('frontend.pages.formations.information_orientation');
    }
    public function preInscription(){
        return view('frontend.pages.formations.preinscription',[
            'classes' => Classe::all(),
        ]);
    }
    public function scolaritePaiement(){
        return view('frontend.pages.formations.scolarite_paiement');
    }

    public function storePreInscription(Request $request){

        $photo = $request->photo;
        $diplome = $request->diplome;
        $filepath = null;
        if ($photo) {
            $id_unique = uniqid('photo', true);
            $timestamp = time();
            $nom_fichier = md5($id_unique . $timestamp);
            $extension = $photo->getClientOriginalExtension();
            $tempPath = $photo->getRealPath();
            $fileSize = $photo->getSize();
            $location = 'uploads_photos';
            $filepath = $nom_fichier . "." . $extension;
            $photo->move($location, $filepath);
        }
        if ($diplome) {
            $id_unique = uniqid('diplome', true);
            $timestamp = time();
            $nom_fichier = md5($id_unique . $timestamp);
            $extension = $diplome->getClientOriginalExtension();
            $tempPath = $diplome->getRealPath();
            $fileSize = $diplome->getSize();
            $location_diplome = 'uploads_diplomes';
            $filepath_diplome = $nom_fichier . "." . $extension;
            $diplome->move($location_diplome, $filepath_diplome);
        }
        $eleve = new Etudiant();
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;

        $date_obj = DateTime::createFromFormat('d-m-Y', $request->date_naissance);
        if (!$date_obj) {
            $eleve->date_naissance = $request->date_naissance;
        } else {
            $date_format_mysql = $date_obj->format('Y-m-d');
            $eleve->date_naissance = $date_format_mysql;
        }
        $eleve->lieu_naissance = $request->lieu_naissance;
        $eleve->genre = $request->genre;
        $eleve->adresse = $request->adresse;
        $eleve->telephone = $request->telephone;
        $eleve->nationality = $request->nationalite;
        $eleve->contact = $request->contact;
        $eleve->numero_contact = $request->numero_contact;
        $eleve->email = $request->email;
        $eleve->religion = $request->religion;
        $eleve->id_classe = $request->classe;
        $eleve->photo = $filepath;
        $eleve->photo = $filepath;
        $eleve->diplome = $filepath_diplome;
        if ($request->parent){
            $eleve->id_parent = $request->parent;
        }
        if ($eleve->save()) {
            $inscription = new Inscription();
            $inscription->id_eleve = $eleve->id;
            $inscription->id_classe = $request->classe;
            $inscription->id_periode = $request->periode;
            $inscription->date_inscription = date('Y-m-d');
            $inscription->etat = 2;
            $inscription->save();

            flash()->success('Enregistrement', 'Elève enregistré avec succès.');
        } else {
            flash()->error('Enregistrement', 'Erreur lors de l\'enregistrement de l\'élève.');
        }

        return redirect()->route('pre-inscription')->with('success','Votre pré-inscription a été enregistrée avec succès. Vous recevrez un mail de confirmation dans les prochaines minutes.');
    }

}
