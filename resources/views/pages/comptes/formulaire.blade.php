@extends('layouts.master')
@section('content')
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Compte</h3>
                <ul>
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                    <li>Ajouter une classe</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Add Class Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter un administrateur</h3>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-expanded="false">...</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                            </div>
                        </div>
                    </div>
                    <form class="new-added-form" method="POST" action="{{isset($compte)? route('comptes.update', ['compte'=> $compte->id]):route('comptes.store')}}" >
                        @csrf
                        @if(isset($compte))
                            @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Prenom</label>
                                <input
                                    name="prenom"
                                    type="text"
                                    placeholder="Entrez le prenom"
                                    class="form-control"
                                    required
                                    value="{{$compte->infos->prenom ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Nom</label>
                                <input
                                    name="nom"
                                    type="text"
                                    placeholder="Entrez le nom "
                                    class="form-control"
                                    required
                                    value="{{$compte->infos->nom ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label for="identifiant">Identifiant de connexion</label>
                                <input
                                    id="identifiant"
                                    name="identifiant"
                                    type="text"
                                    placeholder="Entrez l'identifiant de connexion"
                                    class="form-control"
                                    required
                                    value="{{$compte->identifiant ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label for="email">Email</label>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    placeholder="Entrez votre email"
                                    class="form-control"
                                    required
                                    value="{{$compte->infos->email ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label for="telephone">Telephone</label>
                                <input
                                    id="telephone"
                                    name="telephone"
                                    type="text"
                                    placeholder="Entrez votre telephone"
                                    class="form-control"
                                    required
                                    value="{{$compte->infos->telephone ?? ""}}"
                                >
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
