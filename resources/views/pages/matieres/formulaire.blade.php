@extends('layouts.master')
@section('content')
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Matières</h3>
                <ul>
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                    <li>Ajouter une matière</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Add Class Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter une nouvelle matière</h3>
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
                    <form class="new-added-form" method="POST" action="{{isset($matiere)? route('matieres.update', ['matiere'=> $matiere->id]):route('matieres.store')}}" >
                        @csrf
                        @if(isset($matiere))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Nom de la Matière</label>
                                <input
                                    name="nom_matiere"
                                    type="varchar"
                                    placeholder="Entrez le nom de la matière"
                                    class="form-control"
                                    required
                                    value="{{$matiere->nom_matiere ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Coéfficient</label>
                                <input
                                    name="coef"
                                    type="number"
                                    placeholder="Entrez le Coéfficient"
                                    class="form-control"
                                    required
                                    value="{{$matiere->coef ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Classe </label>
                                <select class="select2" name="classe_id">
                                    <option value="">sélectionner une classe</option>
                                    @foreach(\App\Models\Classe::all() as $classe)
                                        <option value="{{$classe->id}}"
                                                @if(isset($matiere)&& $matiere->classe_id === $classe->id)
                                                    selected
                                                @endif>
                                            {{$classe->nom_classe}}
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
