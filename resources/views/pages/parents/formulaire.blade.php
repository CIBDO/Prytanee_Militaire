@extends('layouts.master')
         @section('content')
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Parents</h3>
                    <ul>
                        <li>
                            <a href="/">Accueil</a>
                        </li>
                        <li>Ajouter un Parent</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Ajouter un nouveau Parent</h3>
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
                        <form class="new-added-form" method="POST" action="{{isset($parent)? route('parents.update', ['class'=> $parent->id]):route('parents.store')}}">
                             @csrf
                        @if(isset($parent))
                            @method('PUT')
                        @endif
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Prénom</label>
                                    <input 
                                    name="prenom" 
                                    type="text" 
                                    placeholder="Entrez le prénom" 
                                    class="form-control" 
                                    required 
                                    value="{{$parent->prenom ?? ""}}"
                                >
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Nom</label>
                                    <input 
                                    name="nom"
                                    type="text" 
                                    placeholder="Entrez le nom" 
                                    class="form-control"
                                    required
                                    value="{{$parent->nom ?? ""}}"
                                    >
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Sexe</label>
                                    <select class="select2">
                                        <option value="">Veuillez selectionner le genre*</option>
                                        <option value="1">M</option>
                                        <option value="2">F</option>                                  
                                    </select>
                                    value="{{$parent->sexe ?? ""}}" >
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Fonction</label>
                                    <input 
                                    value="occupation"
                                    type="text" 
                                    placeholder="Entrez la fonction" 
                                    class="form-control"
                                    value="{{$parent->occupation ?? ""}}"
                                    >
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Email</label>
                                    <input
                                    value="email"
                                    type="email" 
                                    placeholder="Entrez l'email" 
                                    class="form-control"
                                    value="{{$parent->email ?? ""}}">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Adresse</label>
                                    <input 
                                    value="adresse"
                                    type="text" 
                                    placeholder="Entrez l'adresse"
                                    required
                                    class="form-control"
                                    value="{{$parent->email ?? ""}}">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Contact</label>
                                    <input 
                                    value="telephone"
                                    type="number"
                                    placeholder="Entrez le contact" 
                                    required
                                    class="form-control"
                                    value="{{$parent->telephone ?? ""}}">
                                </div>
                                
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Souvegarder</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    @stop