@extends('layouts.master')
@section('content')
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Enseignants</h3>
                <ul>
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                    <li>Ajouter un Enseignant</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Add Class Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter une nouveau Enseignant</h3>
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
                    <form class="new-added-form" method="POST" enctype="multipart/form-data"
                          action="{{isset($enseignant)? route('enseignants.update', ['enseignant'=> $enseignant->id]):route('enseignants.store')}}" >
                        @csrf
                        @if(isset($enseignant))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Prénom </label>
                                <input
                                    name="prenom"
                                    type="text"
                                    placeholder="Entrez le prénom de l'enseignant"
                                    class="form-control"
                                    required
                                    value="{{$enseignant->prenom ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Nom </label>
                                <input
                                    name="nom"
                                    type="text"
                                    placeholder="Entrez le nom de l'enseignant"
                                    class="form-control"
                                    required
                                    value="{{$enseignant->nom ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Genre *</label>
                                <select name="genre" class="select2">
                                    <option value="">Veuillez sélectionner un genre *</option>
                                    <option value="M" {{isset($enseignant) && $enseignant->sexe == "M" ? "selected":""}}>M</option>
                                    <option value="F" {{isset($enseignant) && $enseignant->sexe == "F" ? "selected":""}}>F</option>
                                </select>
                            </div>

{{--                            <div class="col-xl-3 col-lg-6 col-12 form-group">--}}
{{--                                <label>Matière</label>--}}
{{--                                <select name="matiere" class="select2">--}}
{{--                                    <option value="">Veuillez sélectionner une Matière *</option>--}}
{{--                                    @foreach(\App\Models\Matiere::all() as $matiere)--}}
{{--                                        <option value="{{$matiere->id}}" {{isset($enseignant) && $enseignant->matiere_id == $matiere->id ? "selected":""}}>--}}
{{--                                            {{$matiere->nom_matiere}}--}}
{{--                                        </option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                <input--}}
{{--                                    name="matiere"--}}
{{--                                    type="text"--}}
{{--                                    placeholder="Entrez la spécialité de l'enseignant"--}}
{{--                                    class="form-control"--}}
{{--                                    required--}}
{{--                                    value="{{$enseignant->specialisation ?? ""}}"--}}
{{--                                >--}}
{{--                            </div>--}}
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date de Naissance</label>
                                <input
                                    name="date_naissance"
                                    type="date"
                                    placeholder="Entrez la date de naissance de l'enseignant"
                                    class="form-control"
                                    required
                                    value="{{$enseignant->date_naissance ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Contact</label>
                                <input
                                    name="telephone"
                                    type="number"
                                    placeholder="Entrez le contact de l'enseignant"
                                    class="form-control"
                                    required
                                    value="{{$enseignant->telephone ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Adresse E-mail</label>
                                <input
                                    name="email"
                                    type="text"
                                    placeholder="Entrez l'email de l'enseignant"
                                    class="form-control"
                                    required
                                    value="{{$enseignant->email ?? ""}}"
                                >
                            </div>
                            @if (!isset($enseignant))
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Identifiant de connexion </label>
                                    <input
                                        name="identifiant"
                                        type="text"
                                        placeholder="Entrez l'identifiant"
                                        class="form-control"
                                        required
                                    >
                                </div>
                            @endif
                            <div class="col-lg-6 col-12 form-group mg-t-30">
                                @if(isset($enseignant))
                                    <embed src="{{asset('uploads_cv/'.$enseignant->cv)}}" type="application/pdf" width="100%" height="600">

                                @endif
                                <label class="text-dark-medium">Joindre le CV</label>
                                <input name="cv" type="file" class="form-control-file" accept="application/pdf">
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Enregistrer</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@stop
