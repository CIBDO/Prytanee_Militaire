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
    <!-- Add New Parent Area Start Here -->
    <div class="card height-auto">
        <div class="card">
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
                            <a class="dropdown-item" href="#"><i
                                    class="fas fa-cogs text-dark-pastel-green"></i>Editer</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Actualiser</a>
                        </div>
                    </div>
                </div>

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form class="new-added-form" method="POST"
                      action="{{ isset($parent) ? route('parents.update', ['parent' => $parent->id]) : route('parents.store') }}">
                    @csrf
                    @if(isset($parent))
                        @method('PUT')
                    @endif
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Prénom *</label>
                            <input
                                name="prenom"
                                type="text"
                                placeholder="Entrez le prénom"
                                class="form-control"
                                required
                                value="{{ old('prenom', $parent->prenom ?? '') }}"
                            >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Nom *</label>
                            <input
                                name="nom"
                                type="text"
                                placeholder="Entrez le nom"
                                class="form-control"
                                required
                                value="{{ old('nom', $parent->nom ?? '') }}"
                            >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Fonction *</label>
                            <input
                                name="fonction"
                                type="text"
                                placeholder="Entrez la fonction"
                                class="form-control"
                                required
                                value="{{ old('fonction', $parent->fonction ?? '') }}"
                            >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Email *</label>
                            <input
                                name="email"
                                type="email"
                                placeholder="Entrez l'email"
                                class="form-control"
                                required
                                value="{{ old('email', $parent->email ?? '') }}"
                            >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Adresse *</label>
                            <input
                                name="adresse"
                                type="text"
                                placeholder="Entrez l'adresse"
                                class="form-control"
                                required
                                value="{{ old('adresse', $parent->adresse ?? '') }}"
                            >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Contact *</label>
                            <input
                                name="telephone"
                                type="number"
                                placeholder="Entrez le contact"
                                class="form-control"
                                required
                                value="{{ old('telephone', $parent->telephone ?? '') }}"
                            >
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                Enregistrer
                            </button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Annuler</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Add New Parent Area End Here -->
@endsection
