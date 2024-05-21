@extends('layouts.master')
@section('content')
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Livres</h3>
                <ul>
                    <li>
                        <a href="/">Accueil</a>
                    </li>
                    <li>Ajouter un livre</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Add Class Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter un nouveeu livre</h3>
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
                    <form class="new-added-form" method="POST" action="{{isset($livre)? route('livres.update', ['class'=> $livre->id]):route('livres.store')}}" >
                        @csrf
                        @if(isset($livre))
                            @method('POST')
                        @endif
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Titre du Livre</label>
                                <input
                                    name="titre"
                                    type="varchar"
                                    placeholder="Entrez le titre du livre"
                                    class="form-control"
                                    required
                                    value="{{$livre->titre?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Auteur du Livre</label>
                                <input
                                    name="auteur"
                                    type="text"
                                    placeholder="Entrez l'auteur du Livre"
                                    class="form-control"
                                    required
                                    value="{{$livre->contenu ?? ""}}"
                                >
                            </div>
                            <div class="col-xl-3 col-lg-6 col-12 form-group">
                                <label>Date de Publication</label>
                                <input
                                    name="date_publication"
                                    type="date"
                                    placeholder="Entrez la date de publication"
                                    class="form-control"
                                    required
                                    value="{{$livre->date_publication ?? ""}}"
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
