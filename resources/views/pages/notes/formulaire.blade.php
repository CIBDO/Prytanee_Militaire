@extends('layouts.master')
@section('content')
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Notes</h3>
                <ul>
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                    <li>Ajouter une note</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Add Class Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter une nouvelle note</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Fermer</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Editer</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Actualiser</a>
                            </div>
                        </div>
                    </div>
                    <form class="new-added-form" method="POST" action="{{isset($note)? route('notes.update', ['class'=> $note->id]):route('notes.store')}}" >
                        @csrf
                        @if(isset($note))
                            @method('POST')
                        @endif
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Note</label>
                                <input
                                    name="valeur"
                                    type="number"
                                    placeholder="Entrez la note"
                                    class="form-control"
                                    required
                                    value="{{$note->valeur ?? ""}}"
                                >
                            </div>
                    
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Matières </label>
                                <select class="select2" name="enseignant">
                                    <option value="">sélectionner une matière</option>
                                    @foreach($matieres as $matiere)
                                        <option value="{{$matiere->id}}"
                                                @if(isset($note)&& $note->id_matiere === $matiere->id)
                                                    selected
                                                @endif>
                                            {{$matiere->nom_matiere}} 
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Etudiants </label>
                                <select class="select2" name="enseignant">
                                    <option value="">sélectionner un élève </option>
                                    @foreach($etudiants as $etudiant)
                                        <option value="{{$etudiant->id}}"
                                                @if(isset($note)&& $note->id_etudiant === $etudiant->id)
                                                    selected
                                                @endif>
                                            {{$etudiant->nom}} {{$etudiant->prenom}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 form-group"></div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Enregistrer</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@stop
